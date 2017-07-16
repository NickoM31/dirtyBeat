<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("radio", name="radio")
     */
    public function radioAction(Request $request)
    {
        return $this->render('default/dirtyRadio.html.twig');
    }
    /**
     * @Route("beatmaker", name="beatmaker")
     */
    public function beatmakerAction(Request $request)
    {
        return $this->render('default/dirtyBeatmaker.html.twig');
    }
    /**
     * @Route("videos", name="videos")
     */
    public function videoAction(Request $request)
    {
        return $this->render('default/dirtyVideo.html.twig');
    }
    /**
     * @Route("graff", name="graff")
     */
    public function graffAction(Request $request)
    {
        return $this->render('default/dirtyGraff.html.twig');
    }
    /**
     * @Route("assos", name="assos")
     */
    public function assoAction(Request $request)
    {
        return $this->render('default/dirtyAsso.html.twig');
    }
    /**
     * @Route("agenda", name="agenda")
     */
    public function agendaAction(Request $request)
    {
        return $this->render('default/dirtyAgenda.html.twig');
    }
}
