import pygame
from game import *

#classe qui gere le projectile
#class qui herite de sprite
class Projectile(pygame.sprite.Sprite):

    #definir le constructeur de cette class
    def __init__(self, player):
        super().__init__()
        self.velocity=5
        self.player= player
        self.image = pygame.image.load('image/boule.png')
        self.rect = self.image.get_rect()
        self.rect.x = player.rect.x + 120
        self.rect.y = player.rect.y + 50
        self.origin_image = self.image
        self.angle = 0


    def rotate(self):
        #tourner le projectile
        self.angle += 1
        self.image = pygame.transform.rotozoom(self.origin_image, self.angle, 1)

    def remove(self):
        self.player.all_projectiles.remove(self)
        print("sup")


    def move(self, game):
        self.rect.x += self.velocity
        self.rotate()
        #si le projectif n'est plus present sur l"ecran
        if self.rect.x > 1000:
            #le supprimer
            self.remove()
            game.text.score_negatif()