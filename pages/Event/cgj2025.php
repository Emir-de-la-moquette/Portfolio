<?php
// Définir le chemin relatif spécifique à cette page
include "../navbar.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de l'info</title>
    <link rel="stylesheet" href="../../static/styles/pj.css">
</head>
<body>

    <main>
        <div class="intro-z">
            <div id="intro1">
            <h2>Code Game Jam 2025</h2>
            <p>
                Cette game jam organisé par l'IUT de Montpellier nous à été proposé après la nuit de l'info 2024, très motivé nous en avons parlé avec l'IUT d'Orléans afin d'y faire une organisation propre.
                <br></br>
                Ici à Orléans ce sont 2 équipes qui participerons sur les 68 en total, les "SmartDawgs" et notre équipe "JS.remove()". L'évènement commença part une présentation de 17 à 18 heures avant d'entammer tout le processus de réflexion puis de dev.
                <br></br>
                Site web de la Code Game Jam : <a href="https://cgj.bpaul.fr/">https://cgj.bpaul.fr/</a>
            </p>
            </div>
            <div id="intro2">
                <img src="../../static\images\projets-events\cgj.png" alt="Code Game Jam 2025">
            </div>

        </div>

        <section class="features">
            <div class="func-haut">
                <h2>Le déroulement de l'évènement</h2>
                <p>
                    Cette game jam s'est déroulé en 3 grandes étapes de Jeudi 18 heures à Samedi 11 heures !
                    Notre équipe JS.remove(), était composé de 6 personnes dont 2 qui ont des compétences en 3D (très important car notre objectif était de faire un jeu en 3D).
                </p>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h2>18h - 22h BRAINSTORMING</h2>
                    
                    <p>
                        Dès que le Thème nous à été donné "Mélodie à l'infini" nous avons cherché les jeux de mots possible et établis plusieurs idées de jeux,
                        l'idée finale ayant été retenue fut une jeu en dongeon dans lequel il faut monter les étages afin de vaincre la musique
                        puis le personnage se rends compte que la musique c'est cool et donc va chercher à la remettre en place.
                    </p>
                    <p>Parmis les autres idées il y avait un jeu de plateformeur et un Warioware (mini jeux)</p>
                </section>
                <section class=imag>
                    <img class="func-bas" src="../../static/images/projets-events/brainstorm.jpg" alt="brainstorm">
                </section>
            </div>
            <div class="func-bas">
                <section class=imag>
                    <img class="func-bas" src="../../static/images/projets-events/dev1.png" alt="phase de dev">
                </section>
                <section class=txt>
                    <h2>Jeudi 22h - Vendredi 18h</h2>
                    
                    <p>
                        Après avoir terminé de réfléchir à nos idées et mangé les pizzas apportés par nos professeurs nous avons entammé la partie de développement sur Unity en C#,
                        contrairement à l'IUT de Montpellier nous avons choisit de faire nuit blanche dès la première nuit, donc le café et les boissons énergisantes était à foison !
                    </p>
                    <p>Chacun avait son rôle, le mien était pur back-end. Je réalisait le code pour bouger le personnage, faire des attaques, etc...</p>
                    <p>Vers l'approche des 18h nous avions une version presque complète, mais comme l'IUT allait fermer pour le week-end il était temps de remballer et continuer chez nous.</p>
                </section>
            </div>
            <div class="func-bas">
                <section class=txt>
                    <h2>Vendredi 20h - Samedi 11h</h2>
                    
                    <p>
                        Après être rentrés chez nous nous étions plus que 5 à développer, il restait encore pas mal de travail, comme les menus, la gestion de la fin du jeu et surtout la musique et sound design.
                    </p>
                    <p>Malheuresement après être rentré chez moi j'ai eu une gros coup de fatigue ce qui m'a fait dormir, je n'ai pas pû réellement aider le reste de l'équipe qui n'atait plus 4.</p>
                    <p>Les derniers memebres à travailler sur le projets ont donnés tout ce qu'ils pouvait et ont réussi à finaliser le rendu !</p>
                </section>
                <section class=imag>
                    <img class="func-bas" src="../../static/images/projets-events/dev2.png" alt="jeu final">
                </section>
            </div>
        </section>
        
        <section class="tech">
            <div class="tech-haut">
                <h2>Notre jeu final !</h2>
                <p>
                    Nous avons réussi à livrer le jeu à temps, même si nous n'avions pas terminé tout ce que nous avions prévu de faire.
                    Cependant nous en sommes fier !
                </p>
                <a href="https://play.unity.com/en/games/764f9679-62b8-4a5e-b1eb-3e4ad25e9d98/webgl-builds">Notre jeu : Le chant du Silence</a>
            </div>

            <div class="tech-haut">
                <h2>Les technologies utilisées</h2>
                <p>
                    Nous avons utilisé Unity (pour la première fois) et donc avons codé en C# (très similaire au Java ce qui à simplifié les choses).
                </p>
            </div>

            <div class="tech-bas">
                <img src="../../static/images/skills/unity.png" alt="Unity">
                <img src="../../static/images/skills/c_sharp.png" alt="Csharp">
            </div>
        </section>
    </main>

    <script src="../../static/script/pj.js"></script>
</body>
</html>
