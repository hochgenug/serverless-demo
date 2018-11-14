<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;


class DefaultController extends AbstractController
{
    /**
     * @Route("/dev", name="default")
     */
    public function index()
    {
        return new Response('<html><body><h1>Coucou l\'AFUP</h1><img src="https://pbs.twimg.com/profile_images/844231579635453954/46-pS_2z_400x400.jpg"></body></html>');
    }
}
