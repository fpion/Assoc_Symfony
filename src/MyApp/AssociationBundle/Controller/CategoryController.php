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

use MyApp\AssociationBundle\Form\CategoryForm;
use MyApp\AssociationBundle\Entity\Category;

class CategoryController extends ContainerAware {

    public function listAction() {
        
        $em = $this->container->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository('MyAppAssociationBundle:Category')->findAll();
        
        
        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Category:list.html.twig',
                    array('categories' => $categories)
        );
    }
    
    
    public function deleteAction($id) {
        
        $em = $this->container->get('doctrine.orm.entity_manager');
        $category = $em->find('MyAppAssociationBundle:Category', $id);

        if (!$category) {
            throw new NotFoundHttpException("Categorie non trouvé");
        }

        $em->remove($category);
        $em->flush();


        return new RedirectResponse($this->container->get('router')->generate('myapp_category_list'));
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Category:delete.html.twig');
    }
    
    public function modifyAction($id = null) {

        $message = '';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) {
            // modification d'un acteur existant : on recherche ses données
            $category = $em->find('MyAppAssociationBundle:Category', $id);

            if (!$category) {
                $message = 'Aucun Category trouvé';
            }
        } else {
            // ajout d'un nouvel membre
            $category = new Category();
        }

        $form = $this->container->get('form.factory')->create(new CategoryForm());
        $form->setData($category);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($category);
                $em->flush();
                if (isset($id)) {
                    $message = 'Category modifié avec succès !';
                } else {
                    $message = 'Category ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Category:modify.html.twig', array(
            'form' => $form->createView(),
            'message' => $message));
    }

}
