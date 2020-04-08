<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class EventController extends AbstractController
{
    /**
     * @Route("/list", name="event")
     */
    public function list()
    {
        return new Response('Liste des events');
    }

    /**
     * @Route("/show/{id}", name="show_event", requirements = {"id"="\d+"})
     */
    public function show($id)
    {
        return new Response('Affichage d\'un event');
    }

    /**
     * @Route("/new", name="new_event")
     */
    public function new()
    {
        return new Response('Creer nouvel event');
    }

    /**
     * @Route("/join", name="join_event")
     */
    public function join()
    {
        return new Response('Rejoindre evenement');
    }
}
