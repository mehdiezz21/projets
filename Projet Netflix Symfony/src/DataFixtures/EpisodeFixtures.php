<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $episodeN1 = new Episode();
        $episodeN1->setAnime("naruto")
                    ->setNumero(1)
                    ->setLien("https://videas.fr/embed/8fbaca0e-8377-4d5a-b7d6-ea2b4eb86003/")
                    ->setResume("Elève de l'académie Ninja, Naruto Uzumaki essaie par tous les moyens de gagner l'attention et la 
                    reconnaissance des habitants du village de Konoha. Cependant, l'adolescent provoque rapidement une crise au sein du village.");

        $episodeN2 = new Episode();
        $episodeN2->setAnime("naruto")
                    ->setNumero(2)
                    ->setResume("Naruto va enfin devenir officiellement ninja. Il 
                    fait la connaissance de Konohamaru, le petit-fils du troisième Hokage, qui fait tout pour obtenir le respect de tous.")
                    ->setLien("https://videas.fr/embed/8bfe0f30-dada-4758-8995-5479e621a1d2/");

        $episodeN3 = new Episode();
        $episodeN3->setAnime("naruto")
                    ->setNumero(3)
                    ->setResume("Naruto est enfin devenu un Ninja et va pouvoir mener sa première 
                    mission en compagnie de deux autres jeunes ninjas. Ses co-équipiers se nomment Sakura Haruno et Sasuke Uchiwa.")
                    ->setLien("https://videas.fr/embed/2998d81a-18c3-4a08-94da-85bb119ed5a8/");

        $episodeP1 = new Episode();
        $episodeP1->setAnime("pokemon")
                    ->setNumero(1)
                    ->setResume("Faites la connaissance de Sacha Ketchum, un jeune garçon de 10 ans, dont l'imagination, la confiance en soi et les ambitions sont bien trop grandes pour son petit 
                    village de Bourg Palette. Parviendra-t-il à atteindre son rêve de devenir un véritable Maître Pokémon ?")
                    ->setLien("https://videas.fr/embed/568b896e-b350-4864-9d68-51b13bbfd9c5/");

        $episodeP2 = new Episode();
        $episodeP2->setAnime("pokemon")
                    ->setNumero(2)
                    ->setResume("Des voleurs de Pokémon ont été repérés et la ville est en état d'alerte. Il 
                    s'agit de Jessie, James et Miaouss de la Team Rocket, une bande de voyous spécialisée dans le vol de précieux Pokémon.")
                    ->setLien("https://videas.fr/embed/dceb61c1-96b1-484d-8080-9a602f6dc610/");

        $episodeP3 = new Episode();
        $episodeP3->setAnime("pokemon")
                    ->setNumero(3)
                    ->setResume("La Team Rocket fait son apparition pour voler Pikachu 
                    (ils se sont rendu compte que ce Pokémon a quelque chose de vraiment spécial), mais Sacha fera tout pour se défendre.")
                    ->setLien("https://videas.fr/embed/b4fe20e4-8ac2-40a6-9b63-d3a9cefe3995/");
                    
        $episodeD1 = new Episode();
        $episodeD1->setAnime("dbz")
                    ->setNumero(1)
                    ->setResume("Un étrange personnage arrive sur la Terre pour rechercher son frère. Pendant ce temps, Son Goku doit se mettre à la recherche de son fils qui batifole et s’intéresse à tous les animaux qu’il rencontre. Il manque d’ailleurs de mourir en tombant du haut d’une chute d’eau mais en réchappe grâce à un pouvoir surnaturel. 
                    L’extraterrestre continue sa quête et s’étonne que la Terre n’ait pas été détruite.")
                    ->setLien("https://videas.fr/embed/00f02b1a-1364-4043-8ac2-58c804720365/");

        $episodeD2 = new Episode();
        $episodeD2->setAnime("dbz")
                    ->setNumero(2)
                    ->setResume("Un mystérieux guerrier de l’espace nommé Raditz recherche Son Goku. Il lui explique qu’il est son frère, qu’il appartient à la planète Végéta et que Son Goku fut envoyé sur Terre lorsqu’il fut enfant pour détruire la planète. Raditz est venu le chercher pour qu’il l’aide à détruire une autre planète, et prend 
                    son fils en otage pour le persuader. Mais Son Goku est devenu bon à la suite de sa chute…")
                    ->setLien("https://videas.fr/embed/81a96d98-4d9d-439e-9e26-a748e0541f5f/");

        $episodeD3 = new Episode();
        $episodeD3->setAnime("dbz")
                    ->setNumero(3)
                    ->setResume("Raditz, le frère de Son Goku, laisse 24 heures à ce dernier pour prouver qu’il combattra les terriens à ses côtés. Il prend son fils en otage. Mais un allié inattendu va se joindre à Son Goku en la personne de Piccolo. Celui-ci veut se débarrasser de Raditz pour régner sur la Terre. 
                    Le combat débute entre les trois hommes, mais le guerrier de l’espace semble beaucoup trop fort.")
                    ->setLien("https://videas.fr/embed/68ae85a9-f1f9-4912-afc9-086b045dadc6/");


        $manager->persist($episodeN1);
        $manager->persist($episodeN2);
        $manager->persist($episodeN3);
        $manager->persist($episodeP1);
        $manager->persist($episodeP2);
        $manager->persist($episodeP3);
        $manager->persist($episodeD1);
        $manager->persist($episodeD2);
        $manager->persist($episodeD3);


        $manager->flush();
    }
}
