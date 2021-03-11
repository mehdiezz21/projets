import pygame
from pygame.locals import *

pygame.init()

# ouverture fenetre
fenetre = pygame.display.set_mode((640, 480), RESIZABLE)

# chargement et collage du fond
fond = pygame.image.load("image/blanc.jpg").convert()
fenetre.blit(fond, (0, 0))

# rafraichisement de l'écran
pygame.display.flip()

# boucle infinie
continuer = 1

while continuer:
    if game.pressed.get(pygame.K_SPACE):

    for event in pygame.event.get():
        if event.type == QUIT:
            continuer = 0