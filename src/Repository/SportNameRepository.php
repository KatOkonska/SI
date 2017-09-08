<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 21.08.17
 * Time: 21:40
 */

namespace Repository;

use Doctrine\DBAL\Connection;

class SportNameRepository
{

    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */

    protected $db;

    /**
     * SportNameRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Show all sport names
     * @return array
     */
    public function showAllSportName()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Sport_Name');

        $result = array();
        foreach ($queryBuilder->execute()->fetchAll() as $data)
        {
            $result[$data['Sport_Name']] = $data['Sport_Name_ID'];
        }

        return $result;
    }

}


