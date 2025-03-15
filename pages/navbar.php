<?php 
// Si $basePath n'est pas défini, le considérer comme vide
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/styles/nav.css">
</head>

<div class="navbar">
    <div class="langue">
        <button class="lang-btn" data-lang="fr">
            <img src="/static/images/fr.png" alt="Français">
        </button>
        <!-- <button class="lang-btn" data-lang="en">
            <img src="/static/images/us.png" alt="Anglais">
        </button> -->
    </div>
    <ul class="nav-links">
        <li><a href="/pages/home.php#">Accueil</a></li>
        <li><a href="/pages/home.php#projet php">Projets</a></li>
        <li><a href="/pages/home.php#events php">Evènements</a></li>
        <li><a href="/pages/home.php#skills php">Compétences</a></li>
        <li><a href="/pages/contact.php">Contact</a></li>
    </ul>
    <div class="dropdown">
        <p>Clermont Shanka</p>
    </div>

    <!-- BOUTON ACCESSIBILITE A FINIR -->

    <!-- <div class="dropdown">
        <button class="dropbtn">Accessibilité</button>
        <div class="dropdown-content">
            <a href="#" id="increase-text">Augmenter le texte</a>
            <a href="#" id="decrease-text">Réduire le texte</a>
            <a href="#" id="high-contrast">Mode contraste élevé</a>
            <a href="#" id="reset-settings">Réinitialiser</a>
        </div>
    </div> -->
</div>

<script src="<?= $basePath ?>static/scripts/language.js"></script>

