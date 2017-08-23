<?php
/**
 * Welcome repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Class WelcomeRepository.
 *
 * @package Repository
 */
class WelcomeRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * WelcomeRepository constructor.
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

    public function showName($login)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('User_login')
            ->from('User');
//            ->where('User_login = :login')
//            ->setParameter(':login', $login, \PDO::PARAM_INT);

        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }
}