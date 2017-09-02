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
            ->setParameter(0, $formData['Sport_time'])
            ->setParameter(1, $formData['Sport_kcal'])
            ->setParameter(2, $formData['Sport_distance'])
            ->setParameter(3, $formData['Sport_name_ID'])
            ->setParameter(4, $userID);

        return $queryBuilder->execute();
    }

    public function editTraining($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('Sport')
            ->set('Sport_time', '?')
            ->set('Sport_kcal', '?')
            ->set('Sport_distance', '?')
            ->set('Sport_name_ID', '?')
            ->where('Sport_ID = ?')
            ->setParameter(0, $formData['Sport_time'])
            ->setParameter(1, $formData['Sport_kcal'])
            ->setParameter(2, $formData['Sport_distance'])
            ->setParameter(3, $formData['Sport_name_ID'])
            ->setParameter(4, $id);

        return $queryBuilder->execute();
    }


    public function showAllTraining($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'Sport_ID')
//            ->from('Sport')
//            ->where('User_ID = '.$userID); -> to na pewno działa

//        SELECT * FROM Sport_Name INNER JOIN Sport ON Sport_Name.Sport_Name_ID = Sport.Sport_ID;

//        SELECT * FROM Sport_Name INNER JOIN Sport ON Sport.Sport_Name_ID = Sport_Name.Sport_Name_ID;
//

        $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','s.Sport_Name_ID = sn.Sport_Name_ID')
            ->where('User_ID = '.$userID);

        return $queryBuilder->execute()->fetchAll();
    }

    private function getTrainingsCount($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'snx')
            ->innerJoin('snx','Sport', 'sx','sx.Sport_Name_ID = snx.Sport_Name_ID')
            ->where('User_ID = '.$userID);

        return $queryBuilder->execute()->rowCount();
    }

    public function showWeekTraining($userID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $offset = $this->getTrainingsCount($userID);
        $maxResults = 5;
        $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','s.Sport_Name_ID = sn.Sport_Name_ID')
            ->where('User_ID = '.$userID)
            ->setFirstResult($offset - 5)
            ->setMaxResults($maxResults);

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Find one record.
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
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function querySportAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('Sport', 's');
    }


    public function getTraining($ID)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'Sport_ID')
            ->from('Sport')
            ->where('Sport_ID = '.$ID);

        return $queryBuilder->execute()->fetchAll();
    }


    public function deleteTraining($id)
    {
        return $this->db->delete('Sport', ['Sport_ID' => $id]);
    }

}


