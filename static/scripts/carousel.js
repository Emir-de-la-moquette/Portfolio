const carousel = document.querySelector('.carousel');

let isMouseDown = false;
let startX;
let scrollLeft;

// Lorsque la souris est enfoncée, commence à capturer la position et le défilement
carousel.addEventListener('mousedown', (e) => {
    isMouseDown = true;
    carousel.style.cursor = 'grabbing'; // Change le curseur pendant le drag
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

// Lorsque la souris quitte la zone du carousel, termine l'action de glissement
carousel.addEventListener('mouseleave', () => {
    isMouseDown = false;
    carousel.style.cursor = 'grab'; // Retour au curseur normal
});

// Lorsque l'utilisateur relâche la souris, termine l'action de glissement
carousel.addEventListener('mouseup', () => {
    isMouseDown = false;
    carousel.style.cursor = 'grab'; // Retour au curseur normal
});

// Lors du mouvement de la souris, applique le défilement horizontal
carousel.addEventListener('mousemove', (e) => {
    if (!isMouseDown) return; // Si la souris n'est pas en mode "drag", on ne fait rien
    const x = e.pageX - carousel.offsetLeft;
    const distance = (x - startX) * 2; // Sensibilité du défilement, ajustable
    carousel.scrollLeft = scrollLeft - distance; // Applique le défilement horizontal
});


document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const items = document.querySelectorAll(".carousel-item");
    
    if (carousel && items.length > 0) {
        const middleIndex = Math.floor(items.length / 2)-1; // Index de l'élément central
        const middleItem = items[middleIndex];
        const scrollOffset = middleItem.offsetLeft - (carousel.offsetWidth - middleItem.offsetWidth) / 2;

        carousel.scrollTo({
            left: scrollOffset,
            behavior: "smooth", // Optionnel, pour une animation fluide
        });
    }
});