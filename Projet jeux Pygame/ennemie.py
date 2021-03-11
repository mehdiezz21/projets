import pygame
from player import *
from projectile import Projectile

class Ennemis(pygame.sprite.Sprite):
    #pour que le joueur soit dans le jeu
    def __init__(self):
        #pour qu'il se lance
        super().__init__()
        self.health=10
        self.max_health=10
        self.attack=10
        self.velocity=20
        #image ennemie
        self.image = pygame.image.load('image/nos.png')
        #pour qu'image bouge
        self.rect = self.image.get_rect()
        #position de base
        self.rect.x = 120
        self.rect.y = 120
        self.origin_image = self.image
        self.all_ennemis = pygame.sprite.Group()
        self.position=120+

    def move(self):
        self.rect.x -= self.velocity

    def apparition(self):
        self.all_ennemis.add(Ennemis(self))

    '''def add_enemy():
            ennemi = Mob()
            all_sprites.add(ennemi)
            mobs.add(ennemi)

    def cycle():
        pygame.time.set_timer(add_enemy(), 5000)
        cycle()  # pour boulcer toutes les 5s
        if self.Ennemis.rect.x == self.Projectile.rect.x:
            #le supprimer
            self.remove()

    def walkSprite(self):
        self.walk += 1
        if self.walk > (fps_max * 4 / 30) * 3:
            self.walk = 0
        return int(self.walk / (fps_max * 4 / 30))

    def endSprite(self):
        self.end += 1
        if self.end > (30 * 2 / 30) * 8:
            self.end = -2
        return int(self.end / (30 * 2 / 30))


def create_ennemis():
    """
    Créer un ennemis
    Renvoi cette ennemis
    """
    # Définis des coordonnées aléatoires dans la zone de jeu
    x = (300 + 300) - 100
    min_y = 300
    y = 300

    # Créer l'ennemis
    ennemi = Ennemis(x, y)
    ennemi.coef = 100
    ennemi.pygame.image.load('image/nos.png')

    return ennemi'''

