<?php
// src/AppBundle/Controller/TestController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person;
class TestController extends Controller
{

        /**
        *@Route("/test")
        **/

public function createAction()
{
$person = new Person();
$person->setFirstName('User'.rand(10, 10000));
$person->setLastName('lastname'.rand(10, 10000));
$person->setAge(rand(18, 99));
$em = $this->getDoctrine()->getManager();
$em->persist($person);
$em->flush();
return new Response('Added New User: '.$person->getFirstName().'  '.$person->getLastName().'  with age:'.$person->getAge());
}
}

