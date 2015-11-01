<?php
// src/AppBundle/Controller/TransferController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person as Person;
use Acme\PersonBundle\Document\MongoPerson;
class CountController extends Controller
{
	/**
	*@Route("/count")
	**/
	public function countAction()
		{
		$count = 0;
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$count = $dm->createQueryBuilder('Acme\PersonBundle\Document\MongoPerson')->getQuery()->execute()->count();
		return new Response("Total records found in MongoDB : ".$count);
		}
}

