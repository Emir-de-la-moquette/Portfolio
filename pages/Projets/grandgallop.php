<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Gallop</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Site web grand gallop</h2>
            <p>
                Ce projet est un site web que nous devons concevoir lors d'une SAE de l'IUT d'Orleans, nous avions à disposition la demande d'un "client" qui souhaite un site web pour présenter son établissement mais surtout une interface de gestionnaire afin que les clients puissent réserver des cours et que les administrateur puissent gérer le personnel, les poneys et les adhérents.
                <br></br>
                Pour ce projet nous somme en groupe de 3 et avons décidé de concevoir cette application web en php, pour l'instant nous en sommes qu'au début du dévellopement.
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\poney.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Les maquettes</h2>
                <p>
                    Cette SAE ayant à peine commencé seul les maquettes sont finies.
                </p>
                <p>
                    Voici les maquettes de notre application web :
                </p>
            </div>
            <img class="func-bas" src="../../static/images/projets-events/poney-2.png" alt="Maquettes de l'application web">
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet sera réalisé en php et en html/css avec du javascript.
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/php.png" alt="Java">
                <img src="../../static/images/skills/htmlcss.png" alt="htmlcss">
                <img src="../../static/images/skills/js.png" alt="Javascript">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
