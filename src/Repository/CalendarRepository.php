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

    public function showAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day');

        return $queryBuilder->execute()->fetchAll();
    }

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