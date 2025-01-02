<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puissance 4</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Puissance 4</h2>
            <p>
                Ce projet organisé au sein d'une SAE de l'IUT d'Orléans a pour objectif de réaliser un application de puissance 4 en java pouvant jouer contre d'autres joueurs en raiseau local (ou en ligne pour dépasser les objectifs) grâce à un serveur.
                <br></br>
                Ce projet vient à peine de démarrer mais notre équipe est prête à faire la meilleur application possible !
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\puis4.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Fonctionnalités principales</h2>
                <p>
                    Cette application est un simple puissance 4 abrittant la communication avec un serveur.
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Communication client-serveur</h3>
                    <p>
                        Notre application compte utilisé un protocole TCP afin de s'assurer du bon envoi des paquets, jusqu'ici nous avons simplement élaborer les protocoles de communication des actions du puissance 4.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\tcp.png" alt="TCP">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img src="../../static/images/projets-events\puis4lobby.png" alt="lobby user">
                </section>
                <section class=txt>
                    <h3>Lobby de jeu</h3>
                    <p>
                        Afin de pouvoir choisir quelle personne jouer contre l'application aura un lobby global pour pouvoir voir qui est connecté et effectuer des demande de partie.
                    </p>
                </section>
            </div>
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet sera réalisé en java.
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/java.png" alt="Java">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
