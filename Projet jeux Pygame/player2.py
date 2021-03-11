import pygame
from projectile import Projectile
from enn import *

#premiere classe joueur
class Player(pygame.sprite.Sprite):
    #pour que le joueur soit dans le jeu
    def __init__(self):
        #pour qu'il se lance
        super().__init__()
        self.health=100
        self.max_health=100
        self.attack=10
        self.velocity=5
        #pour projectile
        self.all_projectiles = pygame.sprite.Group()
        #image joueur
        self.image = pygame.image.load('image/magneti.png')
        #pour qu'image bouge
        self.rect = self.image.get_rect()
        #position de base
        self.rect.x=200
        self.rect.y=400
        self.space_pro = [self.rect.x, self.rect.y, 197, 186]

    def launch_projectile(self):
        #creer une nouvelle instance de la class projectile
        self.all_projectiles.add(Projectile(self))


    def move_right(self):
        self.rect.y += self.velocity

    def move_left(self):
        self.rect.y -= self.velocity