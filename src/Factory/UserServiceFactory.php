<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 18:59
 */

namespace App\Factory;

use App\Service\UserService;
use Doctrine\ORM\EntityManager;

class UserServiceFactory
{
    public function createClass(EntityManager $orm, EntityManager $customer)
    {
        return new UserService($orm, $customer);
    }
}
