<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 19:35
 */

namespace App\Factory;

use App\Controller\UserController;
use App\Service\UserService;

class UserControllerFactory
{
    public function createClass(UserService $service)
    {
        return new UserController($service);
    }
}
