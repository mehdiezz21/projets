<?php

namespace App\Controller;


use App\Entity\Anime;
use App\Entity\Comment;
use App\Entity\Episode;
use App\Form\CommentType;
use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
 {
     /**
     * @Route("/manga/{name}", name="manga")
     */
    public function naruto(Request $request, ObjectManager $manager, UserInterface $user, $name): Response
    {
        $repo = $this->getDoctrine()->getRepository(Comment::class);
        $commentaire = $repo->findBy(array('anime'=> $name));

        $repo2 = $this->getDoctrine()->getRepository(Anime::class);
        $animes = $repo2->findBy(array('name'=> $name));

        $repo3 = $this->getDoctrine()->getRepository(Episode::class);
        $episode = $repo3->findBy(array('anime'=> $name));

        $userName = $user->getUsername();

        $comment = new Comment();
        $comment-> setAnime($name);
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $comment->setDate( new \DateTime());
            $comment->setAuteur($userName);
            $manager ->persist($comment);
            $manager->flush();

            return $this->redirectToroute("manga", ['name' => $name]);
        }

        return $this->render('animes/manga.html.twig', [
            'formComment' => $form->createView(),
            'comment' => $commentaire,
            'animes' => $animes,
            'user' => $userName,
            'episode' => $episode
            ]);
    }
 }
