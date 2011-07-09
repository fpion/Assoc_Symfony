<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'myapp_accueil' => true,
       'myapp_lang_choice' => true,
       'myapp_category_list' => true,
       'myapp_category_delete' => true,
       'myapp_category_add' => true,
       'myapp_category_modify' => true,
       'myapp_member_list' => true,
       'myapp_member_add' => true,
       'myapp_member_modify' => true,
       'myapp_member_delete' => true,
       'myapp_member_find' => true,
       'myapp_member_managecontact' => true,
       'myapp_member_addcontact' => true,
       'myapp_contact_list' => true,
       'myapp_contact_delete' => true,
       'myapp_contact_add' => true,
       'myapp_contact_modify' => true,
       'myapp_contact_find' => true,
       'myapp_contact_findaddmember' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getmyapp_accueilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/',  ),));
    }

    private function getmyapp_lang_choiceRouteInfo()
    {
        return array(array (  0 => 'lang',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\DefaultController::choicelangAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'lang',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/choicelang',  ),));
    }

    private function getmyapp_category_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/category/',  ),));
    }

    private function getmyapp_category_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/category/delete',  ),));
    }

    private function getmyapp_category_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::modifyAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/category/add',  ),));
    }

    private function getmyapp_category_modifyRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\CategoryController::modifyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/category/modify',  ),));
    }

    private function getmyapp_member_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/member/',  ),));
    }

    private function getmyapp_member_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifyAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/member/add',  ),));
    }

    private function getmyapp_member_modifyRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/member/modify',  ),));
    }

    private function getmyapp_member_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/member/delete',  ),));
    }

    private function getmyapp_member_findRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::findAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/myapp/member/find',  ),));
    }

    private function getmyapp_member_managecontactRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifycontactAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/member/managecontact',  ),));
    }

    private function getmyapp_member_addcontactRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'idcontact',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\MemberController::modifycontactAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcontact',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/myapp/member/addcontact',  ),));
    }

    private function getmyapp_contact_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/contact/',  ),));
    }

    private function getmyapp_contact_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/contact/delete',  ),));
    }

    private function getmyapp_contact_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::modifyAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/myapp/contact/add',  ),));
    }

    private function getmyapp_contact_modifyRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::modifyAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/myapp/contact/modify',  ),));
    }

    private function getmyapp_contact_findRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::findAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/myapp/contact/find',  ),));
    }

    private function getmyapp_contact_findaddmemberRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyApp\\AssociationBundle\\Controller\\ContactController::findAddmemberAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/myapp/contact/findaddmember',  ),));
    }
}
