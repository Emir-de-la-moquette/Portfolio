document.addEventListener("DOMContentLoaded", function () {
    // Références des éléments
    const increaseTextBtn = document.getElementById("increase-text");
    const decreaseTextBtn = document.getElementById("decrease-text");
    const highContrastBtn = document.getElementById("high-contrast");
    const resetSettingsBtn = document.getElementById("reset-settings");

    // Variables globales
    let fontSize = 16; // Taille de police par défaut
    let isHighContrast = false;

    // Fonction pour augmenter la taille du texte
    function increaseTextSize() {
        fontSize += 2;
        document.body.style.fontSize = `${fontSize}px`;
    }

    // Fonction pour diminuer la taille du texte
    function decreaseTextSize() {
        if (fontSize > 10) {
            fontSize -= 2;
            document.body.style.fontSize = `${fontSize}px`;
        }
    }

    // Fonction pour activer/désactiver le mode contraste élevé
    function toggleHighContrast() {
        if (!isHighContrast) {
            document.body.style.backgroundColor = "#000";
            document.body.style.color = "#000";
            isHighContrast = true;
        } else {
            document.body.style.backgroundColor = "";
            document.body.style.color = "";
            isHighContrast = false;
        }
    }

    // Fonction pour réinitialiser les paramètres
    function resetSettings() {
        fontSize = 16;
        document.body.style.fontSize = "";
        document.body.style.backgroundColor = "";
        document.body.style.color = "";
        isHighContrast = false;
    }

    // Ajout des écouteurs d'événements
    increaseTextBtn.addEventListener("click", increaseTextSize);
    decreaseTextBtn.addEventListener("click", decreaseTextSize);
    highContrastBtn.addEventListener("click", toggleHighContrast);
    resetSettingsBtn.addEventListener("click", resetSettings);

    if (window.location.hash) {
        // fait rester à la bonne position après rechargement
        history.replaceState(null, null, window.location.pathname);
    }
});
