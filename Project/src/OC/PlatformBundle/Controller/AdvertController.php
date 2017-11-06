<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Entity\Advert;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class AdvertController extends Controller
{
  public function addAction(Request $request)
  {
         $advert = new Advert();
         $form   = $this->get('form.factory')->create(AdvertType::class, $advert);

         if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $em->persist($advert);
           $em->flush();

           $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

           return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
         }

         return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
           'form' => $form->createView(),
         ));
  }
}
