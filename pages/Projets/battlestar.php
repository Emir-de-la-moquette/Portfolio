<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battlestar Equestria Online</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Battlestar Equestria Online</h2>
            <p>
                "Battlestar Equestria Online" est une application java d'un projet personnel, il s'agit initialement d'un jeu de société sur le thème de "My little pony" basé sur le jeu de société Battlestar Galactica.
                <br></br>
                La première étape fut la création physique du jeu de société (plateau, cartes, boites et accessoires), puis de faire une version sur Tabletop Simulator afin de pouvoir y jouer en ligne, cependant le coût du jeu de 20e réduisait les possibilité de jeu, j'ai alors commencé le developement de ma propre application avec serveur.
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\condorcet.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Le projet</h2>
                <p>
                    L'application du Battlestar Equestria est toujours en phase du début de dévelloppement, les avancements du projets seront affiché sur ce portfolio !
                </p>
                <p>
                    Voici le plateau de jeu de l'édition 2025 :
                </p>
            </div>
            <img class="func-bas" src="../../static/images/projets-events/battlestarBOARD.png" alt="Plateau Battlestar Equestria">
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet sera réalisé en java pour la structure principale et en html/css javascript pour l'affichage graphique client.
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/java.png" alt="Java">
                <img src="../../static/images/skills/htmlcss.png" alt="htmlcss">
                <img src="../../static/images/skills/js.png" alt="Javascript">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
