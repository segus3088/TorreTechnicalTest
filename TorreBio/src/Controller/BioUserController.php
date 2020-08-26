<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BioUserController extends AbstractController
{
    /**
     * @Route("/bio/user/{idBio}", name="bio_user")
     */
    public function index($idBio)
    {
    	//$bio = this->consultarBio();
    	$bio = file_get_contents('https://bio.torre.co/api/bios/sebastianguachetasalazar');
    	$bio2 = file_get_contents("https://bio.torre.co/api/bios/$idBio");
    	//var_dump($bio);;
    	$bioData = json_decode($bio, true);//array
    	$bioObj = json_decode($bio);//objeto
    	//var_dump($bioObj);
        return $this->render('bio_user/index.html.twig', [
            'controller_name' => 'BioUserController',
            'name_user' => 'Sebastian Salazar',
            'user_profile_a' => $bioData,
            'user_profile_raw' => $bio,
        ]);
    }

    public function consultarBio($id){
    	//
    	$bioJson = file_get_contents('https://bio.torre.co/api/bios/sebastianguachetasalazar');
    	return $bioJson;
    }
}
