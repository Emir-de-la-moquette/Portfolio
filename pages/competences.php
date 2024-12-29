<?php
// Charger le fichier JSON des compétences
$competencesJson = file_get_contents('../static/data/competences.json');
$competencesData = json_decode($competencesJson, true);

// Vérifier si les compétences sont chargées correctement
if (isset($competencesData['competences'])) {
    $competences = $competencesData['competences'];
} else {
    $competences = []; // Liste vide en cas d'erreur
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Compétences</title>
    <link rel="stylesheet" href="../static/styles/competences.css">
</head>
<body>
<div class="project-content">
    <section class="holder" id="skills php">
        <div class="custom-shape3">
            <h1>Mes Compétences</h1>
            <p>Voici les différentes compétences que j'ai acquises.</p>
        </div>
    </section>

    <?php foreach ($competences as $categorie => $items): ?>
    <section class="competences-carousel">
        <div class="competences-carousel-title">
            <h2><?= htmlspecialchars(ucfirst($categorie)) ?></h2>
        </div>
        <ul class="competences-carousel-items">
            <?php foreach ($items as $item): ?>
            <li class="competences-carousel-item">
                <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['nom']) ?>" class="competences-image">
                <span class="competences-name"><?= htmlspecialchars($item['nom']) ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endforeach; ?>
</div>
</body>
</html>
