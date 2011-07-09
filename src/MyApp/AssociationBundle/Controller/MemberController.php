<?php

namespace MyApp\AssociationBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use MyApp\AssociationBundle\Entity\Member;
use MyApp\AssociationBundle\Form\MemberForm;
use MyApp\AssociationBundle\Form\FindForm;

class MemberController extends ContainerAware {

    public function topAction($max = 5) {

        $em = $this->container->get('doctrine')->getEntityManager();

        $qb = $em->createQueryBuilder();
        $qb->select('a')
                ->from('MyAppAssociationBundle:Member', 'a')
                //->orderBy('a.birthday', 'DESC')
                ->setMaxResults($max);

        $query = $qb->getQuery();
        $members = $query->getResult();


        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Member:list_member.html.twig', array('members' => $members)
        );
    }

    public function listAction() {

        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $members = $em->getRepository('MyAppAssociationBundle:Member')->findAll();

        $form = $this->container->get('form.factory')->create(new FindForm());
        
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Member:list.html.twig', 
                array(
                    'members' => $members,
                    'form' => $form->createview(),
                    ));
    }

    public function addAction() {

        $message = '';
        $member = New Member();
        $form = $this->container->get('form.factory')->create(new MemberForm());
        $form->setData($member);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine.orm.entity_manager');
                $em->persist($Member);
                $em->flush();
                $message = 'Membre ajouté avec succès !';
            }
        }
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Member:add.html.twig', array(
            'form' => $form->createView(),
            'message' => ''));
    }

    public function modifyAction($id = null) {

        $message = '';
        $em = $this->container->get('doctrine.orm.entity_manager');

        if (isset($id)) {
            // modification d'un Member existant : on recherche ses données
            $member = $em->find('MyAppAssociationBundle:Member', $id);

            if (!$member) {
                $message = 'Aucun Membre trouvé';
            }
        } else {
            // ajout d'un nouvel membre
            $member = new Member();
        }

        $form = $this->container->get('form.factory')->create(new MemberForm());
        $form->setData($member);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em->persist($member);
                $em->flush();
                if (isset($id)) {
                    $message = 'Membre modifié avec succès !';
                } else {
                    $message = 'Membre ajouté avec succès !';
                }
            }
        }

        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Member:modify.html.twig', array(
            'form' => $form->createView(),
            'message' => $message));
    }

    public function deleteAction($id) {

        $em = $this->container->get('doctrine.orm.entity_manager');
        $member = $em->find('MyAppAssociationBundle:Member', $id);

        if (!$member) {
            throw new NotFoundHttpException("Membre non trouvé");
        }

        $em->remove($member);
        $em->flush();


        return new RedirectResponse($this->container->get('router')->generate('myapp_member_list'));
        return $this->container->get('templating')->renderResponse(
                'MyAppAssociationBundle:Member:delete.html.twig');
    }
/*
    public function findAction() {
        
        $form = $this->container->get('form.factory')->create(new MemberFindForm());

        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Member:find.html.twig', array(
            'members' => $members,
            'form' => $form->createView()
        ));
    }
*/
    
public function findAction()
{               
    $request = $this->container->get('request');

    if($request->isXmlHttpRequest())
    {
        $motcle = '';
        $motcle = $request->request->get('motcle');

        $em = $this->container->get('doctrine')->getEntityManager();

        if($motcle != '')
        {
               $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('MyAppAssociationBundle:Member', 'a')
                  ->where("a.firstname LIKE :motcle OR a.lastname LIKE :motcle")
                  ->orderBy('a.firstname', 'ASC')
                  ->setParameter('motcle', '%'.$motcle.'%');

               $query = $qb->getQuery();               
               $members = $query->getResult();
        }
        else {
            $members = $em->getRepository('MyAppAssociationBundle:Member')->findAll();
        }

        return $this->container->get('templating')->renderResponse('MyAppAssociationBundle:Member:list_member.html.twig', array(
            'members' => $members
            ));
    }
    else {
        return $this->listAction();
    }
}

    public function modifycontactaction($id = null, $idcontact = null){
        
        $em = $this->container->get('doctrine.orm.entity_manager');
        
        $form = $this->container->get('form.factory')->create(new FindForm());
        
        $member = $em->getRepository('MyAppAssociationBundle:Member')->findAll();

        if (isset($id)) {
            // modification d'un Member existant : on recherche ses données
            $member = $em->find('MyAppAssociationBundle:Member', $id);

            if (!$member) {
                $message = 'Le membre n\'a pas été trouvé';
            }
            else{
                
                if(isset ($idcontact)){
                    
                }
            }
        }
        
        return $this->container->get('templating')->renderResponse(
                    'MyAppAssociationBundle:Member:addcontact.html.twig', 
                array(
                    'member' => $member,
                    'form' => $form->createview(),
                    'contacts' => $member->getcontacts()
                    ));
    }
    
}
