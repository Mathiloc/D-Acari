const openModalElements = document.querySelectorAll('.suscrip1, .suscrip2, .suscrip3');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal__close');
const modalParagraph = document.querySelector('.modal__paragraph');

openModalElements.forEach((element) => {
    element.addEventListener('click', (e) => {
        e.preventDefault();

        
        let membershipType;
        let durationDays;
        if (element.classList.contains('suscrip1')) {
            membershipType = 'Estudiantil - Semanal';
            durationDays = 7;
        } else if (element.classList.contains('suscrip2')) {
            membershipType = 'Platino - Quincenal';
            durationDays = 14;
        } else if (element.classList.contains('suscrip3')) {
            membershipType = 'Dorado - Mensual';
            durationDays = 30;
        }

       
        const startDate = new Date();
        const endDate = new Date();
        endDate.setDate(startDate.getDate() + durationDays);

        
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedStartDate = startDate.toLocaleDateString('es-ES', options);
        const formattedEndDate = endDate.toLocaleDateString('es-ES', options);

        
        modalParagraph.innerHTML = `
            Gracias por suscribirte a la membresía <strong>${membershipType}</strong>.<br>
            Inicio de suscripción: <strong>${formattedStartDate}</strong><br>
            Fin de suscripción: <strong>${formattedEndDate}</strong>
        `;

        
        modal.classList.add('modal--show');
    });
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal--show');
});
