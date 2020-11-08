<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users.index", methods={"GET"})
     */
    public function index(): JsonResponse
    {
        return new JsonResponse([
            [
                'name' => 'name1'
            ],
            [
                'name' => 'name2'
            ],
        ]);
    }
}
