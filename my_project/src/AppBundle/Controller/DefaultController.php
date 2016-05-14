<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
     public function indexAction(Request $request)
     {
         return $this->render('default/index.html.twig', array());
     }
     /**
      * @Route("/funpage", name="funpage")
      */
     public function funpageAction(Request $request)
     {
         return $this->render('default/funpage.html.twig', array());
     }
}
