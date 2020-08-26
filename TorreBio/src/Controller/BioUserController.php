<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BioUserController extends AbstractController
{
    /**
     * @Route("/bio/user", name="bio_user")
     */
    public function index()
    {
    	//$bio = this->consultarBio();
    	$bio = file_get_contents('https://bio.torre.co/api/bios/sebastianguachetasalazar');
        return $this->render('bio_user/index.html.twig', [
            'controller_name' => 'BioUserController',
            'name_user' => 'Sebastian Salazar',
            'user_profile' => $bio,
        ]);
    }

    public function consultarBio($id){
    	//
    	$bioJson = file_get_contents('https://bio.torre.co/api/bios/sebastianguachetasalazar');
    	return $bioJson;
    }
}
