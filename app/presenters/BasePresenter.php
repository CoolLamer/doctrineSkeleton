<?php

namespace App;

use Kdyby\Doctrine\EntityManager;
use Nette,
	Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/** @var  EntityManager */
	protected $entityManager;

	public function startup()
	{
		self::startup();
		//$this->entityManager = $this->context->dao;
	}
}
