document.addEventListener('DOMContentLoaded', function() {
    const nextSectionButton = document.createElement('button');
    nextSectionButton.id = 'nextSection';
    nextSectionButton.innerHTML = '<i class="dashicons dashicons-arrow-down-alt2"></i>';
    document.body.appendChild(nextSectionButton);

    let buttonClicked = false;

    function isAtTop() {
        return window.scrollY <= 100; 
    }

    function scrollByPixels() {
        const scrollAmount = 1050; 
        
        window.scrollTo({
            top: window.scrollY + scrollAmount,
            behavior: 'smooth'
        });
    }

    function toggleNextSectionButton() {
        if (isAtTop() && !buttonClicked) {
            nextSectionButton.classList.add('visible');
        } else if (isAtTop() && buttonClicked) {
            buttonClicked = false;
            nextSectionButton.classList.add('visible');
        } else if (!isAtTop() && !buttonClicked) {
            nextSectionButton.classList.remove('visible');
        }
    }

    window.addEventListener('scroll', toggleNextSectionButton);
    nextSectionButton.addEventListener('click', function(e) {
        e.preventDefault();
        buttonClicked = true;
        nextSectionButton.classList.remove('visible');
        scrollByPixels();
    });

    toggleNextSectionButton();
});