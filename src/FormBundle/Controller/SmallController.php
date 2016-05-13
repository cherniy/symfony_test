<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SmallController extends Controller
{
    /**
     * @Route("/small", name="form_small")
     */
    public function indexAction()
    {
        return $this->render('FormBundle:Small:index.html.twig');
    }
}
