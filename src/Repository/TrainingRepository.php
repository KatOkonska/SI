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

class TrainingRepository
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

    public function addTraining($form, $userID)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport')
            ->values(
                array(
                    'Sport_time' => '?',
                    'Sport_kcal' => '?',
                    'Sport_distance' => '?',
                    'Sport_name_ID' => '?',
                    'User_ID' => '?'
                )
            )
            ->setParameter(0, $formData['time'])
            ->setParameter(1, $formData['kcal'])
            ->setParameter(2, $formData['distance'])
            ->setParameter(3, $formData['name'])
            ->setParameter(4, $userID);

        return $queryBuilder->execute();
    }

    public function showAllTraining($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'Sport_ID')
            ->from('Sport')
            ->where('User_ID = '.$userID);

        return $queryBuilder->execute()->fetchAll();
    }

    public function showWeekTraining()
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID')
            ->from('Sport')
            ->where('Sport_time = 222');

        return $queryBuilder->execute()->fetchAll();
    }
}


