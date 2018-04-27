<?php

namespace App\Entity\API;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 *
 * @ApiResource
 * @ORM\Entity
 */
class Greeting
{
	/**
	 * @var int The entity Id
	 *
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @var string A nice person
	 *
	 * @ORM\Column
	 * @Assert\NotBlank
	 */
	public $name = '';

	/**
	 * @var User
	 * @ORM\ManyToOne(targetEntity="User")
	 */
	private $user;

	public function getId(): int
	{
		return $this->id;
	}
}
