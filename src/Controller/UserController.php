<?php
/**
 * Created by PhpStorm.
 * User: Jonathan
 * Date: 30/01/2018
 * Time: 13:43
 */
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @property \App\Service\UserService userService
 */
class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @Route("/users", name="all-users")
     */
    public function indexAction()
    {
        $users = $this->userService->getAllUsers();

        return $this->render("user/all-users.html.twig", compact('users'));
    }

}
