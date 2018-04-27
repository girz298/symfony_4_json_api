<?php
/**
 * Created by PhpStorm.
 * User: s.rodionov
 * Date: 27.04.18
 * Time: 13:05
 */

namespace App\Security;


use Lexik\Bundle\JWTAuthenticationBundle\Security\User\JWTUserInterface;

class User implements JWTUserInterface
{
	private $id;
	private $roles;

	public function __construct(string $id, array $roles)
	{
		$this->id = $id;
		$this->roles = $roles;
	}

	public function getRoles()
	{
		return $this->roles;
	}

	public function getPassword()
	{
	}

	public function getSalt()
	{
	}

	public function getId()
	{
		return $this->id;
	}

	public function getUsername()
	{
	}

	public function eraseCredentials()
	{
	}

	public static function createFromPayload($id, array $payload)
	{
		return new self(
			$id,
			$payload['roles']
		);
	}
}