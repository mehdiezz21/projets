<?php

namespace App\Controller;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EpisodeController extends AbstractController
{
    /**
     * @Route("/episode/{anime}/{numero}", name="episode")
     */
    public function index(Request $request, ObjectManager $manager, $numero, $anime): Response
    {
        $repo = $this->getDoctrine()->getRepository(Episode::class);
        $episode = $repo->findBy(array('anime'=> $anime, 'numero'=> $numero));
        
        $repo2 = $this->getDoctrine()->getRepository(Episode::class);
        $suite = $repo2->findBy(array('anime'=> $anime));

        return $this->render('episode/episode.html.twig', [
            'episode' => $episode,
            'suite' => $suite
        ]);
    }
}
