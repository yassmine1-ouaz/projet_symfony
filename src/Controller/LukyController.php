<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LukyController extends AbstractController
{
    /**
     * @Route("/luky", name="luky")
     */
    public function index(): Response
    {
        return $this->render('luky/index.html.twig', [
            'controller_name' => 'LukyController',
        ]);
    }

    public function number(): Response
    {
        $number = random_int(0,100);
        return new Response("<h1>Lucky number: {$number} </h1>");
    }
}
