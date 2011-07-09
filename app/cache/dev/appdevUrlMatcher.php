<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }
    
            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }
    
            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }
    
            throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }
    
            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }
    
            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }
    
            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\.]+?)\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }
    
            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }
    
            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }
    
            throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }
    
            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }
    
            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }
    
            throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
        }

        if (0 === strpos($pathinfo, '/myapp')) {
            // myapp_accueil
            if (rtrim($pathinfo, '/') === '/myapp') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_accueil');
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'myapp_accueil',);
            }
    
            // myapp_lang_choice
            if (0 === strpos($pathinfo, '/myapp/choicelang') && preg_match('#^/myapp/choicelang/(?P<lang>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\DefaultController::choicelangAction',)), array('_route' => 'myapp_lang_choice'));
            }
    
            // myapp_category_list
            if (rtrim($pathinfo, '/') === '/myapp/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_category_list');
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::listAction',  '_route' => 'myapp_category_list',);
            }
    
            // myapp_category_delete
            if (0 === strpos($pathinfo, '/myapp/category/delete') && preg_match('#^/myapp/category/delete/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::deleteAction',)), array('_route' => 'myapp_category_delete'));
            }
    
            // myapp_category_add
            if ($pathinfo === '/myapp/category/add') {
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::modifyAction',  '_route' => 'myapp_category_add',);
            }
    
            // myapp_category_modify
            if (0 === strpos($pathinfo, '/myapp/category/modify') && preg_match('#^/myapp/category/modify/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::modifyAction',)), array('_route' => 'myapp_category_modify'));
            }
    
            // myapp_member_list
            if (rtrim($pathinfo, '/') === '/myapp/member') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_member_list');
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::listAction',  '_route' => 'myapp_member_list',);
            }
    
            // myapp_member_add
            if ($pathinfo === '/myapp/member/add') {
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifyAction',  '_route' => 'myapp_member_add',);
            }
    
            // myapp_member_modify
            if (0 === strpos($pathinfo, '/myapp/member/modify') && preg_match('#^/myapp/member/modify/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifyAction',)), array('_route' => 'myapp_member_modify'));
            }
    
            // myapp_member_delete
            if (0 === strpos($pathinfo, '/myapp/member/delete') && preg_match('#^/myapp/member/delete/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::deleteAction',)), array('_route' => 'myapp_member_delete'));
            }
    
            // myapp_member_find
            if ($pathinfo === '/myapp/member/find') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_myapp_member_find;
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::findAction',  '_route' => 'myapp_member_find',);
            }
            not_myapp_member_find:
    
            // myapp_member_managecontact
            if (0 === strpos($pathinfo, '/myapp/member/managecontact') && preg_match('#^/myapp/member/managecontact/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifycontactAction',)), array('_route' => 'myapp_member_managecontact'));
            }
    
            // myapp_member_addcontact
            if (0 === strpos($pathinfo, '/myapp/member/addcontact') && preg_match('#^/myapp/member/addcontact/(?P<id>[^/]+?)/(?P<idcontact>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifycontactAction',)), array('_route' => 'myapp_member_addcontact'));
            }
    
            // myapp_contact_list
            if (rtrim($pathinfo, '/') === '/myapp/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'myapp_contact_list');
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::listAction',  '_route' => 'myapp_contact_list',);
            }
    
            // myapp_contact_delete
            if (0 === strpos($pathinfo, '/myapp/contact/delete') && preg_match('#^/myapp/contact/delete/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::deleteAction',)), array('_route' => 'myapp_contact_delete'));
            }
    
            // myapp_contact_add
            if ($pathinfo === '/myapp/contact/add') {
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::modifyAction',  '_route' => 'myapp_contact_add',);
            }
    
            // myapp_contact_modify
            if (0 === strpos($pathinfo, '/myapp/contact/modify') && preg_match('#^/myapp/contact/modify/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::modifyAction',)), array('_route' => 'myapp_contact_modify'));
            }
    
            // myapp_contact_find
            if ($pathinfo === '/myapp/contact/find') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_myapp_contact_find;
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::findAction',  '_route' => 'myapp_contact_find',);
            }
            not_myapp_contact_find:
    
            // myapp_contact_findaddmember
            if ($pathinfo === '/myapp/contact/findaddmember') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_myapp_contact_findaddmember;
                }
                return array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::findAddmemberAction',  '_route' => 'myapp_contact_findaddmember',);
            }
            not_myapp_contact_findaddmember:
    
            throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
