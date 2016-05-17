<?php

namespace FormBundle\Controller;

use FormBundle\Form\CountryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FormBundle\Entity\Country;

class SmallController extends Controller
{
    /**
     * @Route("/small", name="form_small")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(CountryType::class)->handleRequest($request);

        if ($form->isValid()) {
            $country = new Country();
            $country->setName($form->get(CountryType::FIELD_NAME)->getData());

            $em = $this->getDoctrine()->getManager();
            $em->persist($country);
            $em->flush();
        }

        return $this->render(
            'FormBundle:Small:index.html.twig',
            [
                'form' => $form->createView()
            ]
        );
    }
}
