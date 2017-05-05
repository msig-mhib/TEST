<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	public function viewAction($id){
		return new Response("Affichage de l'annonce d'id : " . $id);				
	}

	public function indexAction()
	{
		$content = $this
				->get('templating')
				->render('OCPlatformBundle:Advert:index.html.twig', array('name' => 'toto');

		return new Response($content);			
	}
}
?>
