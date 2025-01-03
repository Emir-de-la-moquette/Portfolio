<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airplan War</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Airplan War</h2>
            <p>
                Ce projet organisé au sein d'un projet du cours de "qualité dev" au sein de L'IUT d'Orléans consistait à "réparer" les parties de code fournies et de les assembler puis de coder les fonctionnalités demandée tout en soutenant les principes de qualité de developement.
                <br></br>
                L'application est un "Shoot-em-up" assez basique écrit en python dans lequel vous controllez un petit vaiseau spatial qui q'améliore après un certain nombre de points.
                <br></br>
                Git disponible : <a href="https://github.com/Emir-de-la-moquette/SAE-airplan-war/releases/tag/2.1">https://github.com/Emir-de-la-moquette/SAE-airplan-war/releases/tag/2.1</a>
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\airplan.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Objectif</h2>
                <p>
                    Ce projet avait pour but de nous apprendre les bonnes pratiques de la collaboration et de la qualité de developement, nous étions 2 par groupe et chaque développeur avait ses tâches précise à faire et devez s'assurer d'un pylint correct et de test valides  ainsi que de proprement utiliser git.
                </p>
            </div>
        </section>

        <section class="features">
            <div class="func-haut">
                <h2>Fonctionnalités principales</h2>
                <p>
                    Cette application est un simple Shoot-em-up avec un style "papier".
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Evolution du vaisseau</h3>
                    <p>
                        Dans notre jeu dès que vous atteindrez les 50000 de score votre vaisseau deviendra plus gros !
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\airplan-2.png" alt="gros vaisseau">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img src="../../static/images/projets-events\airplan.png" alt="game overr">
                </section>
                <section class=txt>
                    <h3>Accélération</h3>
                    <p>
                        Nous avons implémenté un vitesse de jeu qui s'accélère progressivement grâce à une formule mathématique travaillée.
                    </p>
                </section>
            </div>
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet a été réalisé en python.
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/python.png" alt="Python">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
