import pygame
from projectile import Projectile
from enn import *

#premiere classe joueur
class Poto(pygame.sprite.Sprite):
    #pour que le joueur soit dans le jeu
    def __init__(self):
        #pour qu'il se lance
        super().__init__()
        self.health=100
        self.max_health=100
        #image joueur
        self.image = pygame.image.load('image/poto.png')
        #pour qu'image bouge
        self.rect = self.image.get_rect()
        #position de base
        self.rect.x=0
        self.rect.y=80

    def life(self):
        self.health= self.health-10
        print(self.health)
        if self.health <= 0:
            pygame.quit()
        return self.health