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

    public function addTraining($form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport')
            ->values(
                array(
                    'Sport_time' => '?',
                    'Sport_kcal' => '?',
                    'Sport_distance' => '?',
                    'Sport_name' => '?'
                )
            )
            ->setParameter(0, $formData['time'])
            ->setParameter(1, $formData['kcal'])
            ->setParameter(2, $formData['distance'])
            ->setParameter(3, $formData['name']);

        return $queryBuilder->execute();
    }

}


