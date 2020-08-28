<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpportunitiesController extends AbstractController
{
    /**
     * @Route("/opportunities/{idOpp}", name="opportunities")
     */
    public function index($idOpp)
    {
    	$opportunitie = file_get_contents("https://torre.co/api/opportunities/$idOpp");
    	$oppData = json_decode($opportunitie, true);
        return $this->render('opportunities/index.html.twig', [
            'controller_name' => 'OpportunitiesController',
            'title_opp' => $oppData["objective"]
        ]);
    }
}
