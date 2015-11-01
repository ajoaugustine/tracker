<?php
// src/AppBundle/Controller/SetupController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
class SetupController extends Controller
{
	/**
	*@Route("/setup")
	**/
	public function numberAction()
		{
                $count = 0;
                $dm = $this->get('doctrine.odm.mongodb.document_manager');
//                $persons = $this->getDoctrine()->getRepository('AppBundle:Person')->findAll();
		return new Response("<html><body>Data Transfer Successful <\br> Records Transferred: ".$count.'</body></html>');
		}
}

