<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        if (0 === strpos($pathinfo, '/blog')) {
            // Jojo
            if ($pathinfo === '/blog/jojo') {
                return array (  '_controller' => 'grass\\IntraBundle\\Controller\\JojoController::testAction',  '_route' => 'Jojo',);
            }

            if (0 === strpos($pathinfo, '/blog/blog')) {
                // sdzblog_accueil
                if ($pathinfo === '/blog/blog') {
                    return array (  '_controller' => 'grass\\IntraBundle\\Controller\\BlogController::indexAction',  '_route' => 'sdzblog_accueil',);
                }

                if (0 === strpos($pathinfo, '/blog/blog/a')) {
                    // sdzblog_voir
                    if (0 === strpos($pathinfo, '/blog/blog/article') && preg_match('#^/blog/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'grass\\IntraBundle\\Controller\\BlogController::voirAction',));
                    }

                    // sdzblog_ajouter
                    if ($pathinfo === '/blog/blog/ajouter') {
                        return array (  '_controller' => 'grass\\IntraBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
                    }

                }

            }

            // sdzblog_voir_slug
            if (preg_match('#^/blog/(?P<annee>\\d{4})/(?P<slug>[^/\\.]++)\\.(?P<_format>html|xml)\\.(?P<fr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir_slug')), array (  '_controller' => 'grass\\IntraBundle\\Controller\\BlogController::voirSlugAction',  '_format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
