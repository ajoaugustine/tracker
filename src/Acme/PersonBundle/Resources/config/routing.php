<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('person_homepage', new Route('/hello/{name}', array(
    '_controller' => 'PersonBundle:Default:index',
)));

return $collection;
