<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends AbstractController
{
    public function create(Request $request): Response
    {
        $data = \json_decode($request->getContent());

        return new Response('Controller created.');
    }
}
