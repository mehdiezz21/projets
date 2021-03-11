<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Anime::class);
        $animes = $repo->findAll();
        return $this->render('site/index.html.twig', [
            'controller_name' => 'Jamanim',
            'animes' => $animes
        ]);
    }


    /**
     * @Route("/anime", name="anime")
     */
    public function anime(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Anime::class);
        $animes = $repo->findAll();
        return $this->render('site/anime.html.twig', [
            'animes' => $animes
        ]);
    }

    /**
     * @Route("/compte", name="compte")
     */
    public function compte(UserInterface $utilisateur): Response
    {   
        $userName = $utilisateur->getUsername();

        $repo = $this->getDoctrine()->getRepository(Utilisateur::class);
        $user = $repo->findBy(array('userName'=> $userName));


        return $this->render('site/compte.html.twig', [
            'users' => $user
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('site/about.html.twig', [
        ]);
    }

}
