<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response('{"rand_number": "' . mt_rand(-50, 50) . '"}');
	}

	/**
	 * @param string $slug
	 * @Route("/news/{slug}")
	 * @return Response
	 */
	public function show($slug)
	{
		$comments = [
			'1ipisci ducimus eaque maxime mollitia nihil, quidem repudiandae saepe',
			'2ipisci ducimus eaque maxime mollitia nihil, quidem repudiandae saepe',
			'3ipisci ducimus eaque maxime mollitia nihil, quidem repudiandae saepe',
			'4ipisci ducimus eaque maxime mollitia nihil, quidem repudiandae saepe',
		];

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('_', ' ', $slug)),
			'comments' => $comments,
		]);
	}
}