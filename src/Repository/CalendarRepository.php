<?php
/**
 * Calendar repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Class CalendarRepository.
 *
 * @package Repository
 */
class CalendarRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * CalendarRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Fetch all records.
     *
     * @return array Result
     */

    public function displayCurrentDate()
    {
        echo "Today is " . date("Y/m/d") . "<br>";
    }

    public function showLastMonth()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day');
//            ->where('Training_day_day_number' >= DATE_SUB(NOW(), INTERVAL 1 YEAR));

        return $queryBuilder->execute()->fetchAll();
    }

//select
//*
//from
//Training_day
//where
//Training_day_day_number >= DATE_SUB(NOW(), INTERVAL 1 YEAR);


    public function showName()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('User_login')
            ->from('User');

        return $queryBuilder->execute()->fetchAll();
    }

    public function showColumnName()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('User_login')
            ->from('User');

        return $queryBuilder->execute()->fetchAll();
    }
}