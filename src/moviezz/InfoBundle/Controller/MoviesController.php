<?php

namespace moviezz\InfoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class MoviesController extends Controller
{

	public function viewAction($id, $_format, Request $request)
	{
		$tag = $request->query->get('tag');


		return $this->render('moviezzInfoBundle:Movies:index.html.twig', array(
			'movieList' => array(['name' => 'Vertigo', 'id' => $id]),
			'_format' => $_format,
			'id' => $id,
			'tag' => $tag)
		);







		//		return $this->redirectToRoute('index');


//		return new JsonResponse(array('id' => $id));


//		$session = $request->getSession();
//
//		$userID = $session->get('user_id');
//
//		$session->set('user_id', 91);

//		$session->getFlashBag()->add('info', 'message bien enregistré.');
//
//		$session->getFlashBag()->add('info', 'merci.');
//
//		return $this->redirectToRoute('index');
	}

	public function infoAction($id, Request $request)
	{
//		if ($page < 1)
//		{
//			throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
//		}

		$tag = $request->query->get('tag');

		return $this->render('moviezzInfoBundle:Movies:info.html.twig', array(
			'name' => 'Vertigo',
			'id' => $id,
			'tag' => $tag,
			'rating' => 'all')
		);


	}

}