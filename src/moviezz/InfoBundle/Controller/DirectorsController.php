<?php

namespace moviezz\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DirectorsController extends Controller
{
	public function indexAction()
	{
		return $this->render('moviezzInfoBundle:Directors:index.html.twig', array(
			'directorList' => array(['name' => 'Hitchcock', 'id' => 1])
		));
	}
}