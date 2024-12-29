document.addEventListener("DOMContentLoaded", function () {
    const langButtons = document.querySelectorAll(".lang-btn");

    // Fonction pour changer la langue de la page
    function changeLanguage(lang) {
        const elements = document.querySelectorAll("[data-lang-key]");

        // Change le texte de chaque élément en fonction de la langue
        elements.forEach(element => {
            const key = element.getAttribute("data-lang-key");
            element.textContent = translations[lang][key] || element.textContent;
        });
    }

    // Objet contenant les traductions pour chaque langue
    const translations = {
        fr: {
            title: "CLERMONT SHANKA",
            description: "Etudiant de 2e année en BUT informatique.",
        },
        en: {
            title: "CLERMONT SHANKA",
            description: "2nd year student in IT",
        }
    };

    // Lors du clic sur un bouton de langue, on change la langue
    langButtons.forEach(button => {
        button.addEventListener("click", () => {
            const selectedLang = button.getAttribute("data-lang");
            changeLanguage(selectedLang);
        });
    });

    // Par défaut, on applique la langue de la page
    const defaultLang = document.documentElement.lang || 'fr';
    changeLanguage(defaultLang);
});
