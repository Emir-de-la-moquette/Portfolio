<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Maisons de Condorcet</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Les maisons de condorcets</h2>
            <p>
                "Les Maisons de Condorcet" est une application web développée pour le collège Condorcet à Saran. 
                Ce projet a été conçu et déployé en ligne par notre équipe de 5 personnes dans le cadre d'une SAE 
                (Situation d'Apprentissage et d'Évaluation).
                <br></br>
                Ayant dépassé les objectifs de cette SAE pour des 2e années, l'application à été mise en ligne et est réellement utilisée par le client !
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\condorcet.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Fonctionnalités principales</h2>
                <p>
                    Cette application web a pour objectif de rendre la pédagogie du collège plus ludique en s'inspirant des maisons de Harry Potter, chaque maison peut gagner ou perdre des points selon leur comportement en classe afin de monter dans le classement !
                </p>
                <p>
                    L'application a pour but d'être utilisée par les professeurs et l'administration, il nous imcombait donc de faire en sorte que l'application soit la plus accessible et simple d'utilisation possible afin de leur offrir la meilleur experience utilisateur !
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Modularité</h3>
                    <p>
                        L'application à été conçue de manière "souple" afin de s'adapter à tout les besoins possible du Collège, que ce soit sur l'implémentation et customisation des classes et maisons ou sur la gestion des points.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\condorcet-1.png" alt="Interface utilisateur">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img src="../../static/images/projets-events\condorcet-3.png" alt="Interface utilisateur">
                </section>
                <section class=txt>
                    <h3>Lecture des tableurs</h3>
                    <p>
                        Afin de faciliter le travail de la vie scolaire et des l'administration l'application est capable de lire les fichiers open documents, libre office et excel pour être capable de s'adapter aux sorties des fichiers de PRONOTE. Les donées sont visualisables après chargement d'un fichier afin d'en vérifier son intégrité.
                    </p>
                </section>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Graphiques</h3>
                    <p>
                        Afin d'arborer un suivi de l'utilisation de l'application nous avons intégrés plusieurs graphiques modifiés en temps réel.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\condorcet-2.png" alt="Interface utilisateur">
                </section>
            </div>
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet a été réalisé avec Python, html/css, javascript et flask pour le déploiement ("obligation de la SAE").
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/python.png" alt="Python">
                <img src="../../static/images/skills/flask.png" alt="Flask">
                <img src="../../static/images/skills/htmlcss.png" alt="htmlcss">
                <img src="../../static/images/skills/js.png" alt="Javascript">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
