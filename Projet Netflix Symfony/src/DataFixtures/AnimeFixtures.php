<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Anime;
use App\Entity\Utilisateur;

class AnimeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $anime1 = new Anime();
        $anime1->setName("naruto")
                ->setDate(new \DateTime())
                ->setImage("https://zupimages.net/up/21/04/bbmb.png")
                ->setStudio("Pierrot")
                ->setResume("Dans le village de Konoha vit Naruto, un jeune garçon détesté et craint des villageois, du fait qu'il détient en lui Kyuubi (démon renard à neuf queues) d'une incroyable force, qui a tué un grand nombre de personnes. Le ninja le plus puissant de Konoha à l'époque, Minato Namikaze, a réussi à sceller ce démon dans le corps de Naruto. C'est ainsi que douze ans plus tard, Naruto rêve de devenir le plus grand Hokage de Konoha
                 afin que tous le reconnaissent à sa juste valeur. Mais la route pour devenir Hokage est très longue.")
                ->setAvis("bien")
                ->setNote(9,5);

        $anime2 = new Anime();
        $anime2->setName("dbz")
                ->setDate(new \DateTime())
                ->setImage("https://zupimages.net/up/21/04/hy69.png")
                ->setStudio("Toei Animation")
                ->setResume("Alors qu'elle parcourt les routes de montagnes à moto, Bulma fait une bien étrange rencontre en la personne de Sangoku, un petit garçon étonnamment fort, résistant et possédant une queue, comme les singes. Il possède un trésor qu'elle recherche, une boule de cristal, mais ne veut pas la lui céder, c'est un cadeaux que lui a laissé son grand-père Sangohan. Ils trouvent finalement un compromis, et Sangoku part avec elle à 
                la recherche des 7 boules de cristal dont on dit qu'elles exaucent n'importe quel souhait une fois réunis.")
                ->setAvis("meilleur anime")
                ->setNote(9,5);

        $anime3 = new Anime();
        $anime3->setName("pokemon")
                ->setDate(new \DateTime())
                ->setImage("https://zupimages.net/up/21/04/w4vu.png")
                ->setStudio("Toei Animation")
                ->setResume("Sacha est un jeune garçon qui vit dans le monde des pokemon. Un pokemon est une petite créature possédant divers pouvoirs. Le but de Sacha est de devenir maitre 
                pokemon. Entouré de ses amis il va vivre de nombreuses aventures et combattre la Team Rocket, des voleurs de pokemon.")
                ->setAvis("meilleur anime 2")
                ->setNote(9,5);

        


        $manager->persist($anime1);
        $manager->persist($anime2);
        $manager->persist($anime3);


        $manager->flush();
    }
}
