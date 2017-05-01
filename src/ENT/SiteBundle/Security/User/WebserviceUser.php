<?php
namespace ENT\SiteBundle\Security\User;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * Contact
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="ENT\SiteBundle\Repository\ContactRepository")
 */
class WebserviceUser implements UserInterface, EquatableInterface
{
    /**
   * @var string
   *
   * @ORM\Column(name="pseudo", type="string", length=20, unique=true)
   */
   private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=32)
     */
    private $password;


    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=20)
     */
    private $salt;

    /**
     * @var int
     *
     * @ORM\Column(name="is_active", type="string", length=100)
     */
     private $roles;

    public function __construct($username, $password, $salt, array $roles)
    {
        $this->username = $username;
        $this->password = $password;
        $this->salt = $salt;
        $this->roles = $roles;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return $this->salt;
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
        if (!$user instanceof WebserviceUser) {
            return false;
        }

        if ($this->password !== $user->getPassword()) {
            return false;
        }

        if ($this->salt !== $user->getSalt()) {
            return false;
        }

        if ($this->username !== $user->getUsername()) {
            return false;
        }

        return true;
    }
}
