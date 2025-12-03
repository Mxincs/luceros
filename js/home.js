document.addEventListener('DOMContentLoaded', () => {
    const heroTags = document.querySelectorAll('.tag');

    heroTags.forEach(tag => {
        tag.addEventListener('mousedown', () => {
            tag.style.transform = 'scale(1.15)';
        });

        tag.addEventListener('mouseup', () => {
            // Animación suave al volver
            tag.style.transform = 'scale(1)';
        });
    });
});