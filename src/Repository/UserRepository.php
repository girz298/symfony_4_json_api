<?php
/**
 * Created by PhpStorm.
 * User: s.rodionov
 * Date: 26.04.18
 * Time: 17:36
 */

namespace App\Repository;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

class UserRepository extends EntityRepository implements UserLoaderInterface
{
	public function loadUserByUsername($username)
	{
		return $this->createQueryBuilder('u')
			->where('u.username = :username')
			->setParameter('username', $username)
			->getQuery()
			->getOneOrNullResult();
	}
}