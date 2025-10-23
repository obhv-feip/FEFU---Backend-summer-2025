<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api/users', name: 'api_users', methods: ['GET'])]
    public function getUsers(): JsonResponse
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Иван Иванов',
                'email' => 'ivan@example.com',
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'name' => 'Мария Петрова',
                'email' => 'maria@example.com',
                'role' => 'user'
            ],
            [
                'id' => 3,
                'name' => 'Сергей Сидоров',
                'email' => 'sergey@example.com',
                'role' => 'user'
            ]
        ];

        return $this->json([
            'success' => true,
            'data' => $users,
            'total' => count($users)
        ]);
    }
}

