import pygame
from pygame.locals import *
from game import Game


pygame.init()
#fenetre
pygame.display.set_caption("Premier Jeu")
screen = pygame.display.set_mode((800, 600), RESIZABLE)
#importer arrière plan
background = pygame.image.load('image/test3.jpg').convert()


#charger le jeu
game= Game()

#laisser fenetre ouverte
running = True
while running:
    #appliquer arriere plan
    screen.blit(background, (0,-100))
    #mettre a jour fenetre
    pygame.display.flip()
    #joueur ferme fenetre
    for event in pygame.event.get():
        if event.type == QUIT:
            running = False
            pygame.quit()
            print("fermeture du jeu")