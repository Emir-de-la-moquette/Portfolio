<?php
// Fichier : pages/home.php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../static/styles/home.css">
</head>
<body>
    <header></header>
    <div class="custom-shape1" >
        <div class="dessus-feur">
            <section class="feur">
                <h1 data-lang-key="title">CLERMONT SHANKA</h1>
                <p data-lang-key="description">Etudiant de 2e année en BUT informatique.</p>
            </section>
            <img src="../static/images/raciste.png" alt="Une illustration représentant le développement web">
        </div>
    </div>
    <div class="custom-shape2">
    </div>
    <div class="custom-shape2">
    </div>
    <div class="custom-shape2">
    </div>

    <div class=apropos>
        <h2>A PROPOS DE MOI</h2>
        <p>Étudiant en 2e année de BUT Informatique, passionné par le secteur de la défense et engagé à produire un travail de grande qualité.
            Je me spécialise dans les technologies modernes et les méthodologies rigoureuses, avec une attention particulière aux détails et à l'efficacité.
        </p>
        <p>Motivé par les défis complexes, je vise à appliquer mes compétences informatiques au service d'un domaine exigeant et stratégique, j'aimerais contribuer à des projets innovants et intérréssant.</p>
    </div>

    <?php 
    include 'projects.php';
    include 'evenements.php';
    include 'competences.php';
    ?>

    <script src="../static/scripts/language.js"></script>
    <script src="../static/scripts/accessibility.js"></script>

</body>
</html>
