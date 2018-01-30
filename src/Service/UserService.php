<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 18:58
 */

namespace App\Service;

use App\Entity\Hooli\Users;
use Doctrine\ORM\EntityManagerInterface;

class UserService
{
    public function __construct(EntityManagerInterface $orm, EntityManagerInterface $customer)
    {
        $this->orm = $orm;
    }

    /**
     * Retourne tous les utilisateurs
     * @return array
     */
    public function getAllUsers()
    {
        return $this->orm->getRepository(Users::class)->findAll();
    }
}
