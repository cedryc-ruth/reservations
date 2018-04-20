<?php

namespace EPFC\ReservationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use EPFC\ReservationsBundle\Entity\Artist;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $title = 'Liste des artistes';
        
        $artists = [
            ['firstname'=>'Bob'],
            ['firstname'=>'Fanck'],
            ['firstname'=>'Julie'],
        ];
        
        $artists = $this->getDoctrine()->getRepository(Artist::class)->findAll();
        
        return $this->render('@EPFCReservations/Default/index.html.twig', [
            'artists' => $artists,
            'title' => $title,
        ]);
    }
}
