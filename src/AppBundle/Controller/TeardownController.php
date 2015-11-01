<?php
// src/AppBundle/Controller/TeardownController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class TeardownController extends Controller
{
	/**
	*@Route("/teardown")
	**/
	public function numberAction()
		{
		$number = rand(0, 100);
		return new Response(
		'<html><body>Lucky number: '.$number.'</body></html>'
		);
		}
}

