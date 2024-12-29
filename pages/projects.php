<?php
// Charger le fichier JSON
$projetsJson = file_get_contents('../static/data/projets.json');
$projetsData = json_decode($projetsJson, true); // Décoder en tableau associatif

// Vérifier si les projets ont été chargés correctement
if (isset($projetsData['projets']) && count($projetsData['projets']) > 0) {
    $projets = $projetsData['projets']; // Récupérer les projets dans une variable pour l'affichage
} else {
    $projets = []; // Si aucun projet, on passe une liste vide
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../static/styles/project.css">
</head>
<body>
<div class="project-content">
    <section class="holder" id="projet php">
        <div class="custom-shape3">
            <h1>Mes Projets</h1>
            <p>Voici mes projets que j'ai réalisé seul ou en équipe.</p>
        </div>
    </section>
    
    <section class="carousel">
        <ul class="carousel-items">
            <?php foreach ($projets as $projet): ?>
            <li class="carousel-item">
                <div class="card">
                    <h2 class="card-title"><?= htmlspecialchars($projet['titre']) ?></h2>
                    <img src="<?= htmlspecialchars($projet['image']) ?>" alt="<?= htmlspecialchars($projet['titre']) ?>" />
                    <div class="card-content">
                        <p><?= htmlspecialchars($projet['description']) ?></p>
                        <a href="<?= htmlspecialchars($projet['lien']) ?>" class="button"><div id="btnLienProjet"><p>Plus D'info ici !</p></div></a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>
        
<script src="../static/scripts/carousel.js"></script>
</body>
</html>
