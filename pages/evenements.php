<?php
// Charger le fichier JSON
$eventsJson = file_get_contents('../static/data/event.json');
$eventsData = json_decode($eventsJson, true); // Décoder en tableau associatif

// Vérifier si les projets ont été chargés correctement
if (isset($eventsData['projets']) && count($eventsData['projets']) > 0) {
    $events = $eventsData['projets']; // Récupérer les projets dans une variable pour l'affichage
} else {
    $events = []; // Si aucun projet, on passe une liste vide
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
    <section class="holder" id="events php">
        <div class="custom-shape3">
            <h1>Evènements</h1>
            <p>Les évènements de programmation auxquels j'ai participé.</p>
        </div>
    </section>
    
    <section class="carousel">
        <ul class="carousel-items">
            <?php foreach ($events as $event): ?>
            <li class="carousel-item">
                <div class="card">
                    <h2 class="card-title"><?= htmlspecialchars($event['titre']) ?></h2>
                    <img src="<?= htmlspecialchars($event['image']) ?>" alt="<?= htmlspecialchars($event['titre']) ?>" />
                    <div class="card-content">
                        <p><?= htmlspecialchars($event['description']) ?></p>
                        <a href="<?= htmlspecialchars($event['lien']) ?>" class="button"><div id="btnLienProjet"><p>Plus D'info ici !</p></div></a>
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
