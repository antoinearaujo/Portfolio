<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }

    public function veilleAction()
    {
        return $this->render('HomeBundle:Default:veille.html.twig');
    }

    public function competencesAction()
    {
        return $this->render('HomeBundle:Default:competences.html.twig');
    }

    public function projetsAction()
    {
        return $this->render('HomeBundle:Default:projets.html.twig');
    }
    public function stagesAction()
    {
        return $this->render('HomeBundle:Default:stages.html.twig');
    }
}
