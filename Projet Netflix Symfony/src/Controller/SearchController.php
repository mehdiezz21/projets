<?php

namespace App\Controller;

use App\Entity\Anime;
use App\Entity\Comment;
use App\Form\CommentType;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\AnimeRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SearchController extends AbstractController
{
   /**
     * @Route("/search", name="search")
     */
    public function home(Request $request)
{
        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class,$propertySearch);
        $form->handleRequest($request);

        $articles= [];


        if($form->isSubmitted() && $form->isValid()) {
        $name = $propertySearch->getName(); if ($name!="")
        $articles= $this->getDoctrine()->getRepository(Anime::class)->findBy(['name' => $name] ); else
        $articles= $this->getDoctrine()->getRepository(Anime::class)->findAll();
        }
        return	$this->render('search/search.html.twig',[ 'form' =>$form->createView(), 'animes' => $articles]);
        }
        
}

