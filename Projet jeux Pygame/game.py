import pygame
from player import Player
from enn import Mechant
from projectile import *
from poto import Poto
from text import Text

#classe qui représente le jeu
class Game:
    def __init__(self):
        #importer joueur
        self.player = Player()
        self.mechant = Mechant()
        self.poto= Poto()
        self.text = Text()
        self.pressed= {
        }



'''def update(toDisplay, joueur, secondes_t, difficulty, stat):
    toDelete = [[], [], []]


def timeManager(start, temps_pause):
    """Gere le temps"""

    start = start + temps_pause
    temps = time() - start
    minutes = 0
    secondes_t = int(temps)
    while temps > 60:
        temps -= 60
        minutes += 1
    secondes = int(temps)

    return (secondes, minutes), secondes_t, start

def update(toDisplay, joueur, secondes_t, difficulty, stat):
    #GERE LES ENNEMIS
    toDisplay = [[], [], []]
    for ennemi in toDisplay[ENNEMIS]:
        ennemi.resize_to_src(walk_ennemis[ennemi.walkSprite()])
        fenetre.blit(ennemi.src, (ennemi.x,ennemi.y)'''