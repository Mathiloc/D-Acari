document.addEventListener('DOMContentLoaded', () => {
    const categoryButtons = document.querySelectorAll('.menu-categories li');
    const items = document.querySelectorAll('.item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Quitar la clase activa de todos los botones
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            // Agregar clase activa al botón seleccionado
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');
            
            items.forEach(item => {
                if (filter === 'Todos' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
