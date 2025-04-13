<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page', methods: ['GET'])]
    public function index(): Response
    {
        return $this ->render(view: 'homePage/index.html.twig');
    }
    
    public function register():Response

    {
        return $this ->render(view: 'registration/register.html.twig');
    }

    public function login():Response

    {
        return $this ->render(view: 'security/login.html.twig');
    }

    public function products():Response

    {
        return $this ->render(view: 'productsPage/index.html.twig');
    }

    public function productid():Response

    {
        return $this ->render(view: 'productidPage/index.html.twig');
    }

    public function cart():Response

    {
        return $this ->render(view: 'cartPage/index.html.twig');
    }

    public function admin():Response

    {
        return $this ->render(view: 'adminPage/index.html.twig');
    }

}
