<?php
namespace DoctrineSkeleton\Model\Services;

use Doctrine\ORM\NoResultException;
use DoctrineSkeleton\Model\Entities\User;

class UserService extends BaseService
{
	public function addUser($userName, $password)
	{
		$user = new User();
		$user->setName($userName);
		$user->setPassword($password);
		$this->entityManager->persist($password);

	}

	public function skalpujUzivatele($userId)
	{
		$user = $this->entityManager->find(User::getClassName(), $userId);
		if (!$user) {
			throw new NoResultException(sprintf('User with id %s do not exist', $userId));
		}

		$user->skalpUser();
		$this->entityManager->flush();
		/** ............. */
	}
} 