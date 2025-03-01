import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const burgerIcon = document.getElementById('burger-icon');
    const closeIcon = document.getElementById('close-icon');

    burger.addEventListener('click', function () {
        const isMenuVisible = mobileMenu.classList.toggle('show');
        burgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');

        // Управляем свойством display
        if (isMenuVisible) {
            setTimeout(() => {
                mobileMenu.classList.add('show');
            }, 50);
        } else {
            setTimeout(() => {
                mobileMenu.classList.remove('show');
            }, 50);
        }
    });
});






