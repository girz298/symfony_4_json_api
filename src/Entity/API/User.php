<?php
namespace App\Entity\API;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * User
 *
 * @ORM\Table(name="users",indexes={
 *     @ORM\Index(name="username", columns={"username"}),
 *     @ORM\Index(name="role", columns={"role"}),
 *     @ORM\Index(name="password", columns={"password"})
 * })
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=25, unique=true)
	 */
	private $username;

	/**
	 * @ORM\Column(type="string", length=64)
	 */
	private $password;

	/**
	 * @ORM\Column(type="string", length=64)
	 */
	private $role;

	public function __construct($username, $password, array $role)
	{
		$this->username = $username;
		$this->password = $password;
		$this->role = $role;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	public function getRoles()
	{
		return [$this->role];
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getSalt()
	{
		return '';
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function eraseCredentials()
	{
	}

	public function isEqualTo(UserInterface $user)
	{
		if ($this->password !== $user->getPassword()) {
			return false;
		}

		if ($this->username !== $user->getUsername()) {
			return false;
		}

		return true;
	}
}