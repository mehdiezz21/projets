import pygame
from random import *


#class qui herite de sprite
class Mechant(pygame.sprite.Sprite):

    #definir le constructeur de cette class
    def __init__(self, ):
        super().__init__()
        self.velocity=7
        self.image = pygame.image.load('image/nos.png')
        self.rect = self.image.get_rect()
        self.rect.x = 1000
        self.rect.y = 400 - uniform (50, 400)
        self.origin_image = self.image
        self.all_mechant = pygame.sprite.Group()


    def launch_mechant(self):
        #creer une nouvelle instance de la class projectile
        self.all_mechant.add(Mechant())


    def move(self):
        self.rect.x -= self.velocity
