<?php

namespace moviezz\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
	public function indexAction()
	{
		$content = $this->get('templating')->render('moviezzInfoBundle:Default:index.html.twig');

		return new Response($content);
	}
}