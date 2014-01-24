<?php
namespace DoctrineSkeleton\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Kdyby\Doctrine\Entities\BaseEntity;
use Model\UserManager;

/**
 * @ORM\Entity
 */
class User extends BaseEntity
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 * @var string
	 */
	protected $name;

	/**
	 * @ORM\Column(type="string")
	 * @var $string
	 */
	protected $password;

	/**
	 * @return integer
	 */
	final public function getId()
	{
		return $this->id;
	}


	public function __clone()
	{
		$this->id = NULL;
	}

	/**
	 * @param $title string
	 */
	public function setName($title)
	{
		$this->name = $title;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password = UserManager::hashPassword($password);
	}

	/**
	 * @param $password
	 * @return mixed
	 */
	public function checkPassword($password)
	{
		return $this->password == UserManager::hashPassword($password);
	}
} 