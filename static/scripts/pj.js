document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
    sections.forEach((section, index) => {
        setTimeout(() => {
            section.style.opacity = 1;
        }, index * 300);
    });
});
