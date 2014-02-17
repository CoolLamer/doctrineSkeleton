<?php

namespace App;

use Doctrine\ORM\NoResultException;
use DoctrineSkeleton\Model\Services\UserService;
use Nette,
	Model;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		/** @var UserService $userService */
		$userService = $this->context->getService('userService');

		try {
			$userService->skalpujUzivatele('5');
		} catch (NoResultException $e) {
			$this->flashMessage($e->getMessage());
		}
	}

}
