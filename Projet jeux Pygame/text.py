import pygame
from projectile import Projectile
from game import *

blue = (0, 75, 255)

#premiere classe joueur
class Text(pygame.sprite.Sprite):
    #pour que le joueur soit dans le jeu
    def __init__(self):
        #pour qu'il se lance
        super().__init__()
        self.vie_poto = str(100)
        self.touch_score= str(0)
        self.arial_font = pygame.font.SysFont("arial", 30)
        self.vie =  self.arial_font.render("Vie: "+ self.vie_poto, True, blue)
        self.score = self.arial_font.render("Score: " + self.touch_score, True, blue)
        self.temps = self.arial_font.render("Temps", True, blue)
        self.rect= self.vie.get_rect()

    def life(self):
        self.vie_poto = int(self.vie_poto)-10
        self.vie_poto = str(self.vie_poto)
        self.vie = self.arial_font.render("Vie : " + self.vie_poto, True, blue)

    def score_(self):
        self.touch_score = int(self.touch_score) + 100
        self.touch_score = str(self.touch_score)
        self.score = self.arial_font.render("Score: " + self.touch_score, True, blue)
        print(self.touch_score)

    def score_negatif(self):
        self.touch_score = int(self.touch_score) - 150
        self.touch_score = str(self.touch_score)
        self.score = self.arial_font.render("Score: " + self.touch_score, True, blue)