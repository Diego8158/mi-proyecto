// Animación suave al cargar
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.card.animate');
    cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.2}s`;
    });

    // Validación básica
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const nombre = document.getElementById('nombre').value.trim();
            const correo = document.getElementById('correo').value.trim();
            const reclamo = document.getElementById('reclamo').value.trim();

            if (!nombre || !correo || !reclamo) {
                e.preventDefault();
                alert('⚠️ Por favor, completa todos los campos obligatorios.');
            }
        });
    }
});