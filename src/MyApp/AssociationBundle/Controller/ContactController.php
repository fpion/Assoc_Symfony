<?php

namespace MyApp\AssociationBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\AssociationBundle\Entity\Contact;
use MyApp\AssociationBundle\Form\ContactForm;
use MyApp\AssociationBundle\Form\FindForm;

class ContactController extends ContainerAware {

    public function topAction($max = 5) {

        $em = $this->container->get('doctrine')->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select('a')
                ->from('MyAppAssociationBundle:Contact', 'a')
                //->orderBy('a.birthday', 'DESC')
                ->setMaxResults($max);

        $query = $qb->getQuery();
        $contacts = $query->getResult();


        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Contact:list_Contact.html.twig', array('Contacts' => $contacts)
        );
    }

    public function listAction() {

        $em = $this->container->get('doctrine.orm.entity_manager');

        $form = $this->container->get('form.factory')->create(new FindForm());

        $contacts = $em->getRepository('MyAppAssociationBundle:Contact')->findAll();

        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Contact:list.html.twig', array('contacts' => $contacts,
            'form' => $form->CreateView()
        ));
    }

    public function addAction() {

        $message = '';
        $Contact = New Contact();
        $form = $this->container->get('form.factory')->create(new ContactForm());
        $form->setData($Contact);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine.orm.entity_manager');
                $em->persist($acteur);
                $em->flush();
                $message = 'Contact ajouté avec succès !';
            }
        }
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Contact:add.html.twig', array(
            'form' => $form->createView(),
            'message' => ''));
    }

    public function modifyAction($id = null) {

        $message = '';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) {
            // modification d'un acteur existant : on recherche ses données
            $Contact = $em->find('MyAppAssociationBundle:Contact', $id);

            if (!$Contact) {
                $message = 'Aucun Contact trouvé';
            }
        } else {
            // ajout d'un nouvel membre
            $Contact = new Contact();
        }

        $form = $this->container->get('form.factory')->create(new ContactForm());
        $form->setData($Contact);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($Contact);
                $em->flush();
                if (isset($id)) {
                    $message = 'Contact modifié avec succès !';
                } else {
                    $message = 'Contact ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Contact:modify.html.twig', array(
            'form' => $form->createView(),
            'message' => $message));
    }

    public function deleteAction($id) {

        $em = $this->container->get('doctrine.orm.entity_manager');
        $Contact = $em->find('MyAppAssociationBundle:Contact', $id);

        if (!$Contact) {
            throw new NotFoundHttpException("Contact non trouvé");
        }

        $em->remove($Contact);
        $em->flush();


        return new RedirectResponse($this->container->get('router')->generate('myapp_Contact_list'));
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Contact:delete.html.twig');
    }

    public function findAction() {
        $request = $this->container->get('request');

        if ($request->isXmlHttpRequest()) {
            $motcle = '';
            $motcle = $request->request->get('motcle');

            $em = $this->container->get('doctrine')->getEntityManager();

            if ($motcle != '') {
                $qb = $em->createQueryBuilder();

                $qb->select('a')
                        ->from('MyAppAssociationBundle:Contact', 'a')
                        ->where("a.firstname LIKE :motcle OR a.lastname LIKE :motcle")
                        ->orderBy('a.firstname', 'ASC')
                        ->setParameter('motcle', '%' . $motcle . '%');

                $query = $qb->getQuery();
                $contacts = $query->getResult();
            } else {
                $contacts = $em->getRepository('MyAppAssociationBundle:Contact')->findAll();
            }

            
            
            return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Contact:list_contact.html.twig', array(
                'contacts' => $contacts,
                ));
        } else {
            return $this->listAction();
        }
    }

        public function findAddmemberAction() {
        $request = $this->container->get('request');

        if ($request->isXmlHttpRequest()) {
            $motcle = '';
            $motcle = $request->request->get('motcle');

            $em = $this->container->get('doctrine')->getEntityManager();

            if ($motcle != '') {
                $qb = $em->createQueryBuilder();

                $qb->select('a')
                        ->from('MyAppAssociationBundle:Contact', 'a')
                        ->where("a.firstname LIKE :motcle OR a.lastname LIKE :motcle")
                        ->orderBy('a.firstname', 'ASC')
                        ->setParameter('motcle', '%' . $motcle . '%');

                $query = $qb->getQuery();
                $contacts = $query->getResult();
            } else {
                $contacts = $em->getRepository('MyAppAssociationBundle:Contact')->findAll();
            }

            
            
            return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Contact:addtomember.html.twig', array(
                'contacts' => $contacts,
                ));
        } else {
            return $this->listAction();
        }
    }
    
}
