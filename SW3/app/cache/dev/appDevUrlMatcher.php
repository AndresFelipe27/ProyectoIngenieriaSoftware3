<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/procesojudicial')) {
            // procesojudicial
            if (rtrim($pathinfo, '/') === '/procesojudicial') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'procesojudicial');
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::indexAction',  '_route' => 'procesojudicial',);
            }

            // procesojudicial_show
            if (preg_match('#^/procesojudicial/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesojudicial_show')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::showAction',));
            }

            // procesojudicial_new
            if ($pathinfo === '/procesojudicial/new') {
                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::newAction',  '_route' => 'procesojudicial_new',);
            }

            // procesojudicial_create
            if ($pathinfo === '/procesojudicial/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_procesojudicial_create;
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::createAction',  '_route' => 'procesojudicial_create',);
            }
            not_procesojudicial_create:

            // procesojudicial_edit
            if (preg_match('#^/procesojudicial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesojudicial_edit')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::editAction',));
            }

            // procesojudicial_update
            if (preg_match('#^/procesojudicial/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_procesojudicial_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesojudicial_update')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::updateAction',));
            }
            not_procesojudicial_update:

            // procesojudicial_delete
            if (preg_match('#^/procesojudicial/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_procesojudicial_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesojudicial_delete')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ProcesoJudicialController::deleteAction',));
            }
            not_procesojudicial_delete:

        }

        if (0 === strpos($pathinfo, '/documento')) {
            // documento
            if (rtrim($pathinfo, '/') === '/documento') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'documento');
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::indexAction',  '_route' => 'documento',);
            }

            // documento_show
            if (preg_match('#^/documento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_show')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::showAction',));
            }

            // documento_new
            if ($pathinfo === '/documento/new') {
                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::newAction',  '_route' => 'documento_new',);
            }

            // documento_create
            if ($pathinfo === '/documento/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_documento_create;
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::createAction',  '_route' => 'documento_create',);
            }
            not_documento_create:

            // documento_edit
            if (preg_match('#^/documento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_edit')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::editAction',));
            }

            // documento_update
            if (preg_match('#^/documento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_documento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_update')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::updateAction',));
            }
            not_documento_update:

            // documento_delete
            if (preg_match('#^/documento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_documento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documento_delete')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DocumentoController::deleteAction',));
            }
            not_documento_delete:

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // cliente
            if (rtrim($pathinfo, '/') === '/cliente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cliente');
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
            }

            // cliente_show
            if (preg_match('#^/cliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::showAction',));
            }

            // cliente_new
            if ($pathinfo === '/cliente/new') {
                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
            }

            // cliente_create
            if ($pathinfo === '/cliente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cliente_create;
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
            }
            not_cliente_create:

            // cliente_edit
            if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::editAction',));
            }

            // cliente_update
            if (preg_match('#^/cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::updateAction',));
            }
            not_cliente_update:

            // cliente_delete
            if (preg_match('#^/cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\ClienteController::deleteAction',));
            }
            not_cliente_delete:

        }

        if (0 === strpos($pathinfo, '/abogado')) {
            // abogado
            if (rtrim($pathinfo, '/') === '/abogado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'abogado');
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::indexAction',  '_route' => 'abogado',);
            }

            // abogado_show
            if (preg_match('#^/abogado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abogado_show')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::showAction',));
            }

            // abogado_new
            if ($pathinfo === '/abogado/new') {
                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::newAction',  '_route' => 'abogado_new',);
            }

            // abogado_create
            if ($pathinfo === '/abogado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_abogado_create;
                }

                return array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::createAction',  '_route' => 'abogado_create',);
            }
            not_abogado_create:

            // abogado_edit
            if (preg_match('#^/abogado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abogado_edit')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::editAction',));
            }

            // abogado_update
            if (preg_match('#^/abogado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_abogado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abogado_update')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::updateAction',));
            }
            not_abogado_update:

            // abogado_delete
            if (preg_match('#^/abogado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_abogado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'abogado_delete')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\AbogadoController::deleteAction',));
            }
            not_abogado_delete:

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // bufete_aplicacion_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bufete_aplicacion_homepage')), array (  '_controller' => 'Bufete\\AplicacionBundle\\Controller\\DefaultController::indexAction',));
            }

            // bufete_main_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bufete_main_homepage')), array (  '_controller' => 'Bufete\\MainBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
