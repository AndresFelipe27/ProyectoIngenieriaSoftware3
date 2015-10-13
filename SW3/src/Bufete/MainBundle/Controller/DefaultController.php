<?php

namespace Bufete\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BufeteMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
