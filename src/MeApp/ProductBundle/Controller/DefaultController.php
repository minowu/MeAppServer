<?php

namespace MeApp\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MeAppProductBundle:Default:index.html.twig', array('name' => $name));
    }
}
