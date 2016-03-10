<?php

namespace APP\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APPMainBundle:Default:index.html.twig');
    }
}
