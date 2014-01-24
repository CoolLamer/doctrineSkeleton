<?php

namespace App;

use DoctrineSkeleton\Model\Entities\User;
use Nette,
	Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$user = $this->entityManager->find(User::getClassName(), '10'); //Najdi usera s id 10
		if ($user) {
			//user existuje
		} else {
			//user neexistuje
		}

		$novejUser = new User();
		$novejUser->setName('Franta Toulen');
		$novejUser->setPassword('tajneHeslo');

		$this->entityManager->persist($novejUser); // Ulož uživatele
		$this->entityManager->flush(); // Proved vsecny zmeny v databazi (neco jako commit)
	}

}
