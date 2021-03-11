import pygame
from pygame.locals import *
from game import *
from enn import *
from projectile import *
from text import *
import ftplib
import webbrowser
from time import *
import random
from math import exp

pygame.init()
# fenetre
pygame.display.set_caption("Premier Jeu")
screen = pygame.display.set_mode((1000, 600), RESIZABLE)
# importer arrière plan
background = pygame.image.load('image/test3.jpg').convert()
background_dem = pygame.image.load('image/test3.jpg').convert()

#eee

# charger le jeu
game = Game()

#couleur

# laisser fenetre ouverte
running = True

while running:


    # apparition ennemie en fonction du temps
    temps = pygame.time.get_ticks()  # temps

    # appliquer poto
    screen.blit(game.poto.image, game.poto.rect)


    # appliquer ennemie
    game.mechant.all_mechant.draw(screen)

    # appliquer arriere plan
    screen.blit(background, (0, -100))
    # apliquer image joueur
    screen.blit(game.player.image, game.player.rect)

    # appliquer poto
    screen.blit(game.poto.image, game.poto.rect)

    #appliquer text
    screen.blit(game.text.vie, [10,10])
    screen.blit(game.text.score, [300, 10])
    screen.blit(game.text.temps, [700, 10])

    # appliqeer mechant
    game.mechant.all_mechant.draw(screen)
    # appliquer image projectile
    game.player.all_projectiles.draw(screen)

    # recuperer les projectile du joueur
    for projectile in game.player.all_projectiles:
        projectile.move(game)

    # faire bouger les mechants et les sups
    for mechant in game.mechant.all_mechant:
        mechant.move()
        if mechant.rect.x < 0:
            mechant.remove(game.mechant.all_mechant)
            print("yab")

    # recuperer les projectile du joueur
    for mechant in game.mechant.all_mechant:
        for projectile in game.player.all_projectiles:
            if mechant.rect.colliderect(projectile.rect):
                print('ya')
                mechant.remove(game.mechant.all_mechant)
                projectile.remove()
                game.text.score_()

    for mechant in game.mechant.all_mechant:
        if mechant.rect.colliderect(game.poto.rect):
            mechant.remove(game.mechant.all_mechant)
            game.poto.life()
            game.text.life()




    # verifier deplacement droite gauche joueur
    # pour ne pas qu'ils sortent de l'ecran
    if game.pressed.get(pygame.K_DOWN) and game.player.rect.y + game.player.rect.height < screen.get_height():
        game.player.move_right()
    elif game.pressed.get(pygame.K_UP) and game.player.rect.y > 0:
        game.player.move_left()

    # mettre a jour fenetre
    pygame.display.flip()
    # gerer ennemie
    if (temps % 100 == 0):  # Toutes les 1/2 sec
        game.mechant.launch_mechant()

    # joueur ferme fenetre
    for event in pygame.event.get():
        if event.type == QUIT:
            running = False
            pygame.quit()
            print("fermeture du jeu")

        # si joueur touche clavier
        elif event.type == pygame.KEYDOWN:
            # si la touche est préssé ou non
            game.pressed[event.key] = True
            # detecter la tpuche espace pour projectile
            if event.key == pygame.K_SPACE:
                game.player.launch_projectile()
                game.mechant.all_mechant.remove(Mechant())

        elif event.type == pygame.KEYUP:
            game.pressed[event.key] = False
