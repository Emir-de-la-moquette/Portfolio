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
                Ce projet est un site web que nous devons concevoir lors d'une SAE de l'IUT d'Orleans. L'objectif était simple : réaliser un site permettant de répertorier et rechercher les restaurants d'orléans (qui nous ont été donné via un fichier json).
                <br></br>
                La seconde partie de la SAE n'a pas encore commencé mais il s'agit de créer une application mobile du site web.
                <br></br>
                Pour ce projet nous somme en groupe de 4 et avons décidé de concevoir cette application web en php, la SAE a été terminée (du moins pour la partie web) et notre équipe à réalisé la plupart des fonctionnalitée attendues et a même fait plus sur certain points.
            </p>
            <a href="https://youtu.be/-umx_Hcdf18">Vidéo de présentation du site web</a>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\poney.png" alt="Présentation de l'application">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Fonctionnalités principales</h2>
                <p>
                    Les consignes du projet indiquaient que le site web devait permettre de pour créer un compte, gérer des informations et et ses cuisines/restaurants favoris, il devait aussi permettre de rechercher et consulter des restaurants.
                    Un utilisateur connecté peut ajouter un restaurant en favori et même y laisser un avis.
                </p>
                <p>
                    Ci dessous sont des fonctionnalités que j'ai dévellopper en entier (J'ai évidemment participé au développement d'autres fonctionnalités)
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Modularité</h3>
                    <p>
                        Le site web dispo d'un design soigné et d'une architecture claire, je me suis occuper de créer toutes les pages php et leur design en css.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\resto2.png" alt="Interface utilisateur">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img src="../../static/images/projets-events\mapsAPI.webp" alt="API google">
                </section>
                <section class=txt>
                    <h3>API google</h3>
                    <p>
                        Afin de rendre le projet plus vivant j'ai voulu exploiter l'API google (notamment places API) afin d'avoir des cartes; des images pour les restaurants et des données plus précises, cependant les données fournies par la SAE n'était vraiment pas à jour, j'ai donc du créer et exploiter des "algorithmes" afin de récupérer les meilleurs résultats par rapport à ce que l'on avait.
                    </p>
                </section>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h3>Gestion des comptes utilisateurs</h3>
                    <p>
                        Pour valider la demande du projets d'avoir des comptes, j'ai créer une page de connexion/inscription/modification (basé sur un ancien projet) et l'on peut voir son compte avec ce que l'on a mis en favoris et commenté.
                    </p>
                </section>
                <section class=imag>
                    <img src="../../static/images/projets-events\resto4.png" alt="comptes">
                </section>
            </div>
        </section>

        <section class="tech">
            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Ce projet a été réalisé en php et en html/css avec du javascript avec un connexion à SUPABASE (que je ne m'occupais pas).
                    <br></br>
                    (L'application mobile sera effectuée en flutter)
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
