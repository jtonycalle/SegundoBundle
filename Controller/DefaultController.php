<?php

namespace tony\SegundoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
echo("fff");
        return $this->render('tonySegundoBundle:Default:index.html.twig');
    }
}
