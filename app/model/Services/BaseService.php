<?php
namespace DoctrineSkeleton\Model\Services;

use Kdyby\Doctrine\EntityManager;

class BaseService
{
	/** @var EntityManager */
	public $entityManager;

	function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}
} 