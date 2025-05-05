document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('backToTop');
    
    function toggleButton() {
        if (window.pageYOffset > 100) { // Aparece após rolar 300px
            button.classList.add('show');
        } else {
            button.classList.remove('show');
        }
    }

    // Monitora o evento de rolagem
    window.addEventListener('scroll', toggleButton);

    // Ação de clique no botão
    button.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Verifica posição inicial
    toggleButton();
});