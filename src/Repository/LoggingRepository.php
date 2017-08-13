<?php
/**
 * Tag repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;

/**
 * Class LoggingRepository.
 *
 * @package Repository
 */
class LoggingRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

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
     * Fetch all records.
     *
     * @return array Result
     */
    public function findAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('username', 'password')
            ->from('logowanie');

        return $queryBuilder->execute()->fetchAll();
    }

    public function login($username, $password)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('logowanie')
            ->where('username = :username')
            ->andWhere('password = :password')
            ->setParameter('username', $username)
            ->setParameter('password', $password);

        return $queryBuilder->execute()->fetchAll();

//        sprintf("SELECT * FROM logowanie WHERE username='%s' AND password='%s'",
//            mysqli_real_escape_string($polaczenie,$login),
//            mysqli_real_escape_string($polaczenie,$haslo))))
    }
}