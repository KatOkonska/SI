<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 21.08.17
 * Time: 21:40
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Silex\Application;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Utils\Paginator;

class TrainingRepository
{

    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    const NUM_ITEMS = 5;

    /**
     * TrainingRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * @param $form
     * @param $userID
     * @param $dateId
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function addTraining($form, $userID, $dateId)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport')
            ->values(
                array(
                    'Sport_time' => ':sport_time',
                    'Sport_kcal' => ':sport_kcal',
                    'Sport_distance' => ':sport_distance',
                    'Sport_name_ID' => ':sport_name_ID',
                    'User_ID' => ':user_ID',
                    'Training_day_ID' => ':date_ID'
                )
            )
            ->setParameter(':sport_time', $formData['Sport_time'])
            ->setParameter(':sport_kcal', $formData['Sport_kcal'])
            ->setParameter(':sport_distance', $formData['Sport_distance'])
            ->setParameter(':sport_name_ID', $formData['Sport_name_ID'])
            ->setParameter(':user_ID', $userID)
            ->setParameter(':date_ID', $dateId);

        return $queryBuilder->execute();
    }

    /**
     * @param $id
     * @param $form
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editTraining($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Sport')
            ->set('Sport_time', ':sport_time')
            ->set('Sport_kcal', ':sport_kcal')
            ->set('Sport_distance', ':sport_distance')
            ->set('Sport_name_ID', ':sport_name_ID')
            ->where('Sport_ID = :id')
            ->setParameter(':sport_time', $formData['Sport_time'])
            ->setParameter(':sport_kcal', $formData['Sport_kcal'])
            ->setParameter(':sport_distance', $formData['Sport_distance'])
            ->setParameter(':sport_name_ID', $formData['Sport_name_ID'])
            ->setParameter(':id', $id);

        return $queryBuilder->execute();
    }
    /**
     * Show all trainings
     * @param int $page
     * @param $userID
     * @return array
     */
    public function findAllPaginated($page = 1, $userID)
    {
        $countQueryBuilder = $this->queryAll($userID)
            ->select('COUNT(DISTINCT s.Sport_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->queryAll($userID), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }


    /**
     * Query to show all trainings
     * @param $userID
     * @return $this
     */
    protected function queryAll($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','s.Sport_Name_ID = sn.Sport_Name_ID')
            ->innerJoin('s','Training_day', 'td','s.Training_day_ID = td.Training_day_ID')
            ->where('s.User_ID = '.$userID)
            ->orderBy('td.Training_day_day_number', 'ASC');
    }

    /**
     * Show last 5 trainings
     * @param $userID
     * @return array
     */
    public function showLast5Training($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','s.Sport_Name_ID = sn.Sport_Name_ID')
            ->innerJoin('s','Training_day', 'td','s.Training_day_ID = td.Training_day_ID')
            ->where('s.User_ID = '.$userID)
            ->orderBy('td.Training_day_day_number', 'ASC')
            ->setMaxResults(5);

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Find training by ID
     *
     * @param string $id Element id
     *
     * @return array|mixed Result
     */
    public function findOneTrainingById($id)
    {
        $queryBuilder = $this->querySportAll();
        $queryBuilder->where('s.Sport_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Find one training by date
     * @param $dateId
     * @return array|mixed
     */
    public function findOneTrainingByDate($dateId)
    {
        $queryBuilder = $this->querySportAll();
        $queryBuilder->where('s.Training_day_ID = :id')
            ->setParameter(':id', $dateId, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Query to find one training by id and user
     * @param $id
     * @param $userID
     * @return array|mixedFind one training by user and ID
     */
    public function findOneTrainingByIdAndUser($id, $userID)
    {
        $queryBuilder = $this->querySportAll();
        $queryBuilder->where('s.Sport_ID = :Sport_ID')
        ->andWhere('s.User_ID = :User_ID')
            ->setParameter(':Sport_ID', $id, \PDO::PARAM_INT)
            ->setParameter(':User_ID', $userID, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }

    /**
     * Query to get trainings
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function querySportAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Sport', 's');
    }

    /**
     * Query to get training
     * @param $ID
     * @return array
     */
    public function getTraining($ID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'Sport_ID')
            ->from('Sport')
            ->where('Sport_ID = '.$ID);

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Delete training
     * @param $id
     * @return int
     */
    public function deleteTraining($id)
    {
        return $this->db->delete('Sport', ['Sport_ID' => $id]);
    }

}


