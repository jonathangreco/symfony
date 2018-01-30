<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 18:09
 */
namespace App\Entity\Hooli;

use App\Entity\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Hooli\UserRepository")
 * Class User
 * @package App\Entity\Hooli
 */
class Users
{
    use IdTrait;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $fname;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $role;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     * @return User
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param int $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}
