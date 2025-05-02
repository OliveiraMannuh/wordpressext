// scripts.js - Este arquivo contém scripts JavaScript para interações e funcionalidades dinâmicas do tema.

document.addEventListener('DOMContentLoaded', function() {
    // Exemplo de animação ao rolar a página
    const sections = document.querySelectorAll('.section');
    const options = {
        root: null,
        threshold: 0.1,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });

    // Exemplo de manipulação de eventos para botões
    const purchaseButton = document.querySelector('.purchase-button');
    if (purchaseButton) {
        purchaseButton.addEventListener('click', function() {
            alert('Você será redirecionado para a página de compra!');
            window.location.href = '/page-purchase'; // Altere para a URL correta
        });
    }
});