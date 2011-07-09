<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace MyApp\AssociationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\AssociationBundle\Entity\Member;

class DefaultController extends ContainerAware {

    public function indexAction() {

        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Default:index.html.twig');
    }

    public function choicelangAction($langue = null) {
        if ($langue != null) {
            // On enregistre la langue en session
            $this->container->get('session')->setLocale($langue);
        }

        // on tente de rediriger vers la page d'origine
        $url = $this->container->get('request')->headers->get('referer');
        if (empty($url)) {
            $url = $this->container->get('router')->generate('myapp_accueil');
        }
        return new RedirectResponse($url);
    }

}
