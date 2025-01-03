<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OISHOME</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>OISHOME</h2>
            <p>
                Le projet OISHOME est issu du projet final en fin de terminale STI2D, ce dernier s'inscrit dans le dévelloppement durable car il s'agit d'une cabane connecté pour étudier les oiseaux.
                <br></br>
                Ce projet rassemblait les section SIN (informatique) et ITEC (mécanique), notre groupe était constitué d'une personne en mécanique, un développeur en électronique et d'un développeur logiciel et réseau (moi).
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\oishome.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Fonctionnalités principales</h2>
                <p>
                    Ce projet est à destination des ornithologue afin de faciliter l'étude des oiseau en milieu reculé grâce à une cabane autonome connectée par les réseau 3G et 4G en UDP.
                </p>
                <p>
                    La création de ce projet à été fastidieuse car nous devions mettre en oeuvre toutes nos compétence apprise et même en acquérir de nouvelle (pour ma part Java).
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Connectivité</h3>
                    <p>
                        La cabane aviaire à été conçue pour se connecter à notre serveur via les réseau 3G et 4G grâce à une antenne afin de lui envoyer les données récoltées.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\oishome-1.png" alt="connexion cabane">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img src="../../static/images/projets-events\oishome-2.png" alt="serveur-client">
                </section>
                <section class=txt>
                    <h3>Connexion application-serveur</h3>
                    <p>
                        Afin que les ornithologues puissent récupérer les données des cabanes aviaires à tout moment j'ai crée une application serveur qui récolte les données, les applications clients pouvaient s'y connecter pour y récupérer toutes les données.
                    </p>
                </section>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Traitement des données</h3>
                    <p>
                        L'application traita les données réçue (préparée à l'avance par le serveur) dans des tableaux Excel facilement lisible.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\excel.png" alt="excel">
                </section>
            </div>
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet a été réalisé en java événementiel (application B4J), et arduino pour les cartes électroniques (partie réseau 3g/4g).
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/java.png" alt="Java">
                <img src="../../static/images/skills/arduino.png" alt="Arduino">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
