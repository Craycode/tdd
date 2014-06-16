<?php

namespace Glutzic\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GlutzicCalculatorBundle:Default:index.html.twig', array('name' => $name));
    }
}
