<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpportunitiesController extends AbstractController
{
    /**
     * @Route("/opportunities", name="opportunities")
     */
    public function index()
    {
        return $this->render('opportunities/index.html.twig', [
            'controller_name' => 'OpportunitiesController',
        ]);
    }
}
