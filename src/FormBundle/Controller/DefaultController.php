<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="form_index")
     */
    public function indexAction()
    {
        return $this->render('FormBundle:Default:index.html.twig');
    }
}
