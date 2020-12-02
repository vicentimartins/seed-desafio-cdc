<?php

namespace App\Controller;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends AbstractController
{
    private AuthorRepository $repository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->repository = $authorRepository;
    }

    public function create(Request $request): Response
    {
        $data = json_decode($request->getContent(), true);

        if ($this->repository->create($data) instanceof Author) {
            return $this->json(['response' => 'success']);
        }

        throw new \Exception("Error trying create new author");
    }
}
