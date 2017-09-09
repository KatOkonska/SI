<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:40
 */
/**
 * User repository
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Silex\Application;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * Class UserRepository.
 *
 * @package Repository
 */
class UserRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * UserRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Loads user by login.
     *
     * @param string $login User login
     * @throws UsernameNotFoundException
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function loadUserByLogin($login)
    {
        try
        {
            $user = $this->getUserByLogin($login);

            if (!$user || !count($user))
            {
                throw new UsernameNotFoundException(
                    sprintf('Username "%s" does not exist.', $login)
                );
            }

            $roles = $this->getUserRoles($user['User_ID']);

            if (!$roles || !count($roles))
            {
                throw new UsernameNotFoundException(
                    sprintf('Username "%s" does not exist.', $login)
                );
            }

            return [
                'login' => $user['User_login'],
                'password' => $user['User_password'],
                'roles' => $roles,
            ];
        }
        catch (DBALException $exception)
        {
            throw new UsernameNotFoundException(
                sprintf('Username "%s" does not exist.', $login)
            );
        }
        catch (UsernameNotFoundException $exception)
        {
            throw $exception;
        }
    }

    /**
     * Get user data by login.
     *
     * @param string $login User login
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function getUserByLogin($login)
    {
        try
        {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('u.User_ID', 'u.User_login', 'u.User_password')
                ->from('User', 'u')
                ->where('u.User_login = :login')
                ->setParameter(':login', $login, \PDO::PARAM_STR);

            return $queryBuilder->execute()->fetch();
        }
        catch (DBALException $exception) {
            return [];
        }
    }

    /**
     * Get user by id
     * @param $id
     * @return array|mixed
     */
    public function getUserByID($id)
    {
        try
        {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('u.User_ID', 'u.User_login', 'u.User_password')
                ->from('User', 'u')
                ->where('u.User_ID = :id')
                ->setParameter(':id', $id, \PDO::PARAM_STR);

            return $queryBuilder->execute()->fetch();
        }
        catch (DBALException $exception) {
            return [];
        }
    }

    /**
     * Get user role by user ID.
     *
     * @param integer $userId User ID
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */
    public function getUserRoles($userId)
    {
        $roles = [];

        try
        {
            $queryBuilder = $this->db->createQueryBuilder();
            $queryBuilder->select('r.Name')
                ->from('User', 'u')
                ->innerJoin('u', 'Role', 'r', 'u.Role_ID = r.Role_ID')
                ->where('u.User_ID = :id')
                ->setParameter(':id', $userId, \PDO::PARAM_INT);
            $result = $queryBuilder->execute()->fetchAll();

            if ($result)
            {
                $roles = array_column($result, 'Name');
            }

            return $roles;
        }
        catch (DBALException $exception)
        {
            return $roles;
        }
    }

    /**
     * Register user
     * @param $form
     * @param Application $app
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function register($form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('User')
            ->values(
                array(
                    'User_login' => ':login',
                    'User_password' => ':password',
                    'Role_ID' => '2'
                )
            )
            ->setParameter(':login', $formData['login'])
            ->setParameter(':password', $app['security.encoder.bcrypt']->encodePassword($formData['password'], ''));


        return $queryBuilder->execute();
    }

    /**
     * Edit own password
     * @param $id
     * @param $form
     * @param Application $app
     * @return \Doctrine\DBAL\Driver\Statement|int
     */
    public function editOwnPassword($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_password', ':user_password')
            ->where('User_ID = :user_id')
            ->setParameter(':user_password', $app['security.encoder.bcrypt']->encodePassword($formData['User_password'], ''))
            ->setParameter(':user_id', $id);

        return $queryBuilder->execute();
    }
}
