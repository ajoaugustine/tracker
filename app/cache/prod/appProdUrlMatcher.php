<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // person_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_homepage')), array (  '_controller' => 'Acme\\PersonBundle\\Controller\\DefaultController::indexAction',));
        }

        // app_count_count
        if ($pathinfo === '/count') {
            return array (  '_controller' => 'AppBundle\\Controller\\CountController::countAction',  '_route' => 'app_count_count',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_setup_number
        if ($pathinfo === '/setup') {
            return array (  '_controller' => 'AppBundle\\Controller\\SetupController::numberAction',  '_route' => 'app_setup_number',);
        }

        // app_lucky_number
        if ($pathinfo === '/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/te')) {
                // app_teardown_number
                if ($pathinfo === '/teardown') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TeardownController::numberAction',  '_route' => 'app_teardown_number',);
                }

                // app_test_create
                if ($pathinfo === '/test') {
                    return array (  '_controller' => 'AppBundle\\Controller\\TestController::createAction',  '_route' => 'app_test_create',);
                }

            }

            // app_transfer_transfer
            if ($pathinfo === '/transfer') {
                return array (  '_controller' => 'AppBundle\\Controller\\TransferController::transferAction',  '_route' => 'app_transfer_transfer',);
            }

        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\MainController::contactAction',  '_route' => 'contact',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'AcmeDemoBundle:Welcome:index',  '_route' => '_welcome',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
