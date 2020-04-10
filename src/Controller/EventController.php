<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\EventService;

class EventController extends AbstractController
{

    private $eventService;

    public function __construct( EventService $eventService ){
        $this->eventService = $eventService;
    }


    /**
     * @Route("/list", name="list_event")
     */
    public function list(EventService $eventService)
    {
        return $this->render("event/event_list.html.twig", ["events" => $eventService->getAll()]);
    }

    /**
     * @Route("/show/{id}", name="show_event", requirements = {"id"="\d+"})
     */
    public function show( $id )
    {
        return $this->render( 'event/event_single.html.twig', array(
            'event' => $this->eventService->get( $id ),
        ));
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
