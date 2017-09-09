<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 21.08.17
 * Time: 21:40
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Utils\Paginator;

class TrainingDayRepository
{

    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    const NUM_ITEMS = 5;

    /**
     * TrainingDayRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Add training day
     * @param $form
     * @param $userID
     * @return string
     */
    public function addTrainingDay($form, $userID)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Training_day')
            ->values(
                array(
                    'Training_day_day_number' => ':date',
                    'User_ID' => ':id'
                )
            )
            ->setParameter(':date', date_format($formData['Training_day_day_number'], 'Y-m-d'))
            ->setParameter(':id', $userID);


        $queryBuilder->execute();


        return $this->db->lastInsertId();
    }

    /**
     * Show all training days
     * @param $userID
     * @return array
     */
    public function showAllTrainingDay($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day')
            ->where('User_ID = '.$userID);


        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Find training day by ID
     * @param $id
     * @return array|mixed
     */
    public function findOneTrainingDayById($id)
    {
        $queryBuilder = $this->queryTrainingDayAll();
        $queryBuilder->where('td.Training_day_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();
        if($result){
            $result["Training_day_day_number"] = new \DateTime($result["Training_day_day_number"]);
        }

        return !$result ? [] : $result;
    }

    /**
     * Find training day by user and ID
     * @param $id
     * @param $userID
     * @return array|mixed
     */
    public function findOneTrainingDayByIdAndUser($id, $userID)
    {
        $queryBuilder = $this->queryTrainingDayAll();
        $queryBuilder->where('td.Training_day_ID = :Training_day_ID')
            ->andWhere('td.User_ID = :User_ID')
            ->setParameter(':Training_day_ID', $id, \PDO::PARAM_INT)
            ->setParameter(':User_ID', $userID, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();
        if($result)
        {
            $result ["Training_day_day_number"] = new \DateTime($result ["Training_day_day_number"]);

        }

        return !$result ? [] : $result;
    }

    /**
     * Show next trainings
     * @param $userID
     * @return array
     */
    public function showNextTrainings($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day')
            ->where('Training_day_day_number >= \''.date('Y-m-d').' 00:00:00\'')
            ->andWhere('User_ID = :User_ID')
            ->setParameter(':User_ID', $userID, \PDO::PARAM_INT);


        return $queryBuilder->execute()->fetchAll();
    }

    /**
     *Find all training days
     * @param int $page
     * @param $userID
     * @return array
     */
    public function findAllPaginated($page = 1, $userID)
    {
        $countQueryBuilder = $this->queryAll($userID)
            ->select('COUNT(DISTINCT td.Training_day_ID) AS total_results')
            ->setMaxResults(self::NUM_ITEMS);



        $paginator = new Paginator($this->queryAll($userID), $countQueryBuilder);
        $paginator->setCurrentPage($page);
        $paginator->setMaxPerPage(self::NUM_ITEMS);



        return $paginator->getCurrentPageResults();
    }


    /**
     * Query to find all training days by user
     * @param $userID
     * @return $this
     */

    protected function queryAll($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder
            ->select('*')
            ->from('Training_day', 'td')
            ->where('td.User_ID = '.$userID)
            ->orderBy('td.Training_day_day_number', 'ASC');
    }

    /**
     * Query to find all training days
     * @return $this
     */
    protected function queryTrainingDayAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Training_day', 'td');
    }

    /**
     * Edit training day
     * @param $id
     * @param $form
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editTrainingDay($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Training_day')
            ->set('Training_day_day_number', ':date')
            ->where('Training_day_ID = :id')
            ->setParameter(':date', date_format($formData['Training_day_day_number'], 'Y-m-d'))
            ->setParameter(':id', $id);

        return $queryBuilder->execute();
    }

    /**
     * Delete training day
     * @param $id
     * @return int
     */
    public function deleteTrainingDay($id)
    {
        return $this->db->delete('Training_day', ['Training_day_ID' => $id]);
    }

}


