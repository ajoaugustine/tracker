<?php
// src/AppBundle/Controller/TransferController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person as Person;
use Acme\PersonBundle\Document\MongoPerson;
class TransferController extends Controller
{
	/**
	*@Route("/transfer")
	**/
	public function transferAction()
		{
		$count = 0;
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$collection = $dm->getSchemaManager()->dropDocumentCollection('Acme\PersonBundle\Document\MongoPerson');
                $dm->flush();
		$persons = $this->getDoctrine()->getRepository('AppBundle:Person')->findAll();               
		foreach ($persons as $person){
			$mongoPerson = new mongoPerson();
			$mongoPerson->setFirstName($person->getFirstName());
	                $mongoPerson->setLastName($person->getLastName());
        	        $mongoPerson->setAge($person->getAge());
			$dm->persist($mongoPerson);
			$count++;
			}
		$dm->flush();
		return new Response("Data Transfer Successful <\br> Records Transferred: ".$count);
		}
}

