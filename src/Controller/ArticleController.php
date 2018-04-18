<?php

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
		return new Response('It taste like a rainbow: ' . $slug);
	}
}