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
use Silex\Application;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Utils\Paginator;

/**
 * Class AdminRepository.
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
     * AdminRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Show all users
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

    /**
     * Show all trainings
     * @param Application $app
     * @return array
     */
    public function showAllTrainings(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder
            ->select('*')
            ->from('Sport', 's')
            ->leftJoin('s','Sport_Name', 'sn','s.Sport_Name_ID = sn.Sport_Name_ID');


        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Show all training days
     * @param Application $app
     * @return array
     */
    public function showAllTrainingDays(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day');

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Find user by ID
     * @param $id
     * @return array|mixed
     */
    public function findOneUserById($id)
    {
        $queryBuilder = $this->queryUserAll();
        $queryBuilder->where('u.User_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Find sport name by ID
     * @param $id
     * @return array|mixed
     */
    public function findOneSportNameById($id)
    {
        $queryBuilder = $this->querySportNameAll();
        $queryBuilder->where('sn.Sport_Name_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Edit user
     * @param $id
     * @param $form
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editUser($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_login', ':user_login')
            ->set('Role_ID', ':role_id')
            ->where('User_ID = :user_id')
            ->setParameter(':user_login', $formData['User_login'])
            ->setParameter(':role_id', $formData['Role_ID'])
            ->setParameter(':user_id', $id);

        return $queryBuilder->execute();
    }

    /**
     * Delete user
     * @param $id
     * @return int
     */
    public function deleteUser($id)
    {
        return $this->db->delete('User', ['User_ID' => $id]);
    }


    /**
     * Edit password
     * @param $id
     * @param $form
     * @param Application $app
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editPassword($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_password', ':user_password')
            ->where('User_ID = :user_id')
            ->setParameter(':user_password', $app['security.encoder.bcrypt']->encodePassword($formData['User_password'], ''))
            ->setParameter(':user_id', $id);

        return $queryBuilder->execute();
    }

    /**
     * Add sport name
     * @param $form
     * @param Application $app
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function addSportName($form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport_Name')
            ->values(
                array(
                    'Sport_Name' => ':sport_name',
                )
            )
            ->setParameter(':sport_name', $formData['Sport_Name']);

        return $queryBuilder->execute();
    }

    /**
     * Show all sport names
     * @param Application $app
     * @return array
     */
    public function showAllSportNames(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Sport_Name');

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Edit sport name
     * @param $id
     * @param $form
     * @param Application $app
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editSportName($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Sport_Name')
            ->set('Sport_Name', ':sport_name')
            ->where('Sport_Name_ID = :sport_name_ID')
            ->setParameter(':sport_name', $formData['Sport_Name'])
            ->setParameter(':sport_name_ID', $id);

        return $queryBuilder->execute();
    }

    /**
     * Delete sport name
     * @param $id
     * @return int
     */
    public function deleteSportName($id)
    {
        return $this->db->delete('Sport_Name', ['Sport_Name_ID' => $id]);
    }

    /**
     * Show all users (paginated)
     * @param int $page
     * @return array
     */
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

    /**
     * Query to show users and roles
     * @return $this
     */
    protected function queryUserAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('User', 'u')
            ->innerJoin('u', 'Role','r','u.Role_ID = r.Role_ID' );
    }

    /**
     * Show all trainings
     * @param int $page
     * @return array
     */
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

    /**
     * Query to show all trainings
     * @return $this
     */
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

    /**
     * Show all trainings by sport name
     * @param $sportNameID
     * @return mixed
     */
    public function findAllTrainingsBySportName($sportNameID)
    {
        $queryBuilder = $this->queryAllTrainings();
        $queryBuilder
            ->where('sn.Sport_Name_ID = :id')
            ->setParameter(':id', $sportNameID, \PDO::PARAM_INT);
        return $queryBuilder->execute()->fetchAll();

    }

    /**
     * Show all training days
     * @param int $page
     * @return array
     */
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

    /**
     * Query to show all training days
     * @return $this
     */
    protected function queryAllTrainingDays()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Training_day', 'td')
            ->innerJoin('td','User', 'u','td.User_ID = u.User_ID')
            ->orderBy('u.User_ID', 'ASC');
    }


    /**
     * Show all sport names
     * @param int $page
     * @return array
     */
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

    /**
     * Query to show all sport names
     * @return $this
     */
    protected function querySportNameAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Sport_Name', 'sn');
    }


}
