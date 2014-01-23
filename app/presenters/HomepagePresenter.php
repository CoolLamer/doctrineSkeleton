<?php

namespace App;

use Nette,
	Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		$user = $this->entityManager->find(Model\Entities\User::getClassName(), '10'); //Najdi usera s id 10
		if ($user) {
			//user existuje
		} else {
			//user neexistuje
		}

		$novejUser = new Model\Entities\User();
		$novejUser->setName('Franta Toulen');
		$novejUser->setPassword('tajneHeslo');

		$this->entityManager->persist($novejUser); // Ulož uživatele
		$this->entityManager->flush(); // Proved vsecny zmeny v databazi (neco jako commit)
	}

}
