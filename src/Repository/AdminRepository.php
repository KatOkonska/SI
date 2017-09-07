<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 25.08.17
 * Time: 14:26
 */

/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:40
 */
/**
 * AdminRpository
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Silex\Application;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Utils\Paginator;

/**
 * Class UserRepository.
 *
 * @package Repository
 */
class AdminRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    const NUM_ITEMS = 5;

    /**
     * TagRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Loads user by login.
     *
     * @param string $login User login
     * @throws UsernameNotFoundException
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */

    public function showAllUsers(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('User_ID', 'User_login', 'User_password', 'Role_ID')
            ->from('User');

        return $queryBuilder->execute()->fetchAll();
    }

    public function showAllTrainings(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder
            ->select('*')
            ->from('Sport', 's')
            ->leftJoin('s','Sport_Name', 'sn','s.Sport_Name_ID = sn.Sport_Name_ID');


        return $queryBuilder->execute()->fetchAll();
    }

    public function showAllTrainingDays(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day');

        return $queryBuilder->execute()->fetchAll();
    }


    public function findOneUserById($id)
    {
        $queryBuilder = $this->queryUserAll();
        $queryBuilder->where('u.User_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    public function findOneSportNameById($id)
    {
        $queryBuilder = $this->querySportNameAll();
        $queryBuilder->where('sn.Sport_Name_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    public function editUser($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_login', '?')
            ->set('Role_ID', '?')
            ->where('User_ID = ?')
            ->setParameter(0, $formData['User_login'])
            ->setParameter(1, $formData['Role_ID'])
            ->setParameter(2, $id);

        return $queryBuilder->execute();
    }

    public function deleteUser($id)
    {
        return $this->db->delete('User', ['User_ID' => $id]);
    }



    public function editPassword($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_password', '?')
            ->where('User_ID = ?')
            ->setParameter(0, $app['security.encoder.bcrypt']->encodePassword($formData['User_password'], ''))
            ->setParameter(1, $id);

        return $queryBuilder->execute();
    }

    public function addSportName($form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport_Name')
            ->values(
                array(
                    'Sport_Name' => '?',
                )
            )
            ->setParameter(0, $formData['Sport_Name']);

        return $queryBuilder->execute();
    }

    public function showAllSportNames(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Sport_Name');

        return $queryBuilder->execute()->fetchAll();
    }

    public function editSportName($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Sport_Name')
            ->set('Sport_Name', '?')
            ->where('Sport_Name_ID = ?')
            ->setParameter(0, $formData['Sport_Name'])
            ->setParameter(1, $id);

        return $queryBuilder->execute();
    }

    public function deleteSportName($id)
    {
        return $this->db->delete('Sport_Name', ['Sport_Name_ID' => $id]);
    }

//    paginacja

    public function findAllUsersPaginated($page = 1)
    {
        $countQueryBuilder = $this->queryUserAll()
            ->select('COUNT(DISTINCT u.User_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->queryUserAll(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }


    protected function queryUserAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('User', 'u')
            ->innerJoin('u', 'Role','r','u.Role_ID = r.Role_ID; ' );
    }

    public function findAllTrainingsPaginated($page = 1)
    {
        $countQueryBuilder = $this->queryAllTrainings()
            ->select('COUNT(DISTINCT s.Sport_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->queryAllTrainings(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }

    protected function queryAllTrainings()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','s.Sport_Name_ID = sn.Sport_Name_ID')
            ->innerJoin('s','Training_day', 'td','s.Training_day_ID = td.Training_day_ID')
            ->innerJoin('s','User', 'u','s.User_ID = u.User_ID')
            ->orderBy('u.User_ID', 'ASC');
    }

    public function findAllTrainingsBySportName($sportNameID)
    {
        $queryBuilder = $this->queryAllTrainings();
        $queryBuilder
            ->where('sn.Sport_Name_ID = :id')
            ->setParameter(':id', $sportNameID, \PDO::PARAM_INT);
        return $queryBuilder->execute()->fetchAll();

    }

    public function findAllTrainingDaysPaginated($page = 1)
    {
        $countQueryBuilder = $this->queryAllTrainingDays()
            ->select('COUNT(DISTINCT td.Training_day_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->queryAllTrainingDays(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }

    protected function queryAllTrainingDays()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Training_day', 'td')
            ->innerJoin('td','User', 'u','td.User_ID = u.User_ID')
            ->orderBy('u.User_ID', 'ASC');
    }



    public function findAllSportNamePaginated($page = 1)
    {
        $countQueryBuilder = $this->querySportNameAll()
            ->select('COUNT(DISTINCT sn.Sport_Name_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->querySportNameAll(), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }

    protected function querySportNameAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Sport_Name', 'sn');
    }


}
