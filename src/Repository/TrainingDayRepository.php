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

class TrainingDayRepository
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

    public function addTrainingDay($form, $userID)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Training_day')
            ->values(
                array(
                    'Training_day_day_number' => '?',
                    'User_ID' => '?'
                )
            )
            ->setParameter(0, date_format($formData['Training_day_day_number'], 'Y-m-d'))
            ->setParameter(1, $userID);

        return $queryBuilder->execute();
    }

    public function showAllTrainingDay($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Training_day')
            ->where('User_ID = '.$userID);


        return $queryBuilder->execute()->fetchAll();
    }

    public function findOneTrainingDayById($id)
    {
        $queryBuilder = $this->queryTrainingDayAll();
        $queryBuilder->where('td.Training_day_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();
        $result ["Training_day_day_number"] = new \DateTime($result ["Training_day_day_number"]);
//        var_dump($result);
//        die;

        return !$result ? [] : $result;
    }


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

    protected function queryTrainingDayAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Training_day', 'td');
    }

    public function editTrainingDay($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Training_day')
            ->set('Training_day_day_number', '?')
            ->where('Training_day_ID = ?')
            ->setParameter(0, date_format($formData['Training_day_day_number'], 'Y-m-d'))
            ->setParameter(1, $id);

        return $queryBuilder->execute();
    }

    public function deleteTrainingDay($id)
    {
        return $this->db->delete('Training_day', ['Training_day_ID' => $id]);
    }

    //
//    public function editTrainingDay($id, $form)
//    {
//        $formData = $form->getData();
//        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->update('Sport')
//            ->set('Sport_time', '?')
//            ->set('Sport_kcal', '?')
//            ->set('Sport_distance', '?')
//            ->set('Sport_name_ID', '?')
//            ->where('Sport_ID = ?')
//            ->setParameter(0, $formData['Sport_time'])
//            ->setParameter(1, $formData['Sport_kcal'])
//            ->setParameter(2, $formData['Sport_distance'])
//            ->setParameter(3, $formData['Sport_name_ID'])
//            ->setParameter(4, $id);
//
//        return $queryBuilder->execute();
//    }
//
//    public function deleteTraining($id, $form)
//    {
//
//    }
//
//
//    public function showWeekTraining() //podobnie jak showAllTraining
//    {
//        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID')
//            ->from('Sport')
//            ->where('Sport_time = 222');
//
//        return $queryBuilder->execute()->fetchAll();
//    }
//
//    /**
//     * Find one record.
//     *
//     * @param string $id Element id
//     *
//     * @return array|mixed Result
//     */
//    public function findOneTrainingById($id)
//    {
//        $queryBuilder = $this->querySportAll();
//        $queryBuilder->where('s.Sport_ID = :id')
//            ->setParameter(':id', $id, \PDO::PARAM_INT);
//        $result = $queryBuilder->execute()->fetch();
//
//        return !$result ? [] : $result;
//    }
//
//    /**
//     * Query all records.
//     *
//     * @return \Doctrine\DBAL\Query\QueryBuilder Result
//     */
//    protected function querySportAll()
//    {
//        $queryBuilder = $this->db->createQueryBuilder();
//
//        return $queryBuilder->select('*')
//            ->from('Sport', 's');
//    }
//
//
//    public function getTraining($ID)
//    {
//        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'Sport_ID')
//            ->from('Sport')
//            ->where('Sport_ID = '.$ID);
//
//        return $queryBuilder->execute()->fetchAll();
//    }
}


