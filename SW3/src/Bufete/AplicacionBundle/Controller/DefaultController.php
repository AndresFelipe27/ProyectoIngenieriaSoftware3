<?php

namespace Bufete\AplicacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BufeteAplicacionBundle:Default:index.html.twig', array('name' => $name));
    }
}
