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



const form = document.getElementById('orderForm');
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Отменяем стандартное поведение отправки формы

    // Получаем ссылку на форму и сообщение

    const thankYouMessage = document.getElementById('thankYouMessage');
    const formBox = document.getElementById('form_box');
    const title = document.getElementById('form_title');

    // Добавляем класс для плавного исчезновения формы
    formBox.classList.add('opacity-0'); // Устанавливаем прозрачность в 0

    // Ждем завершения анимации перед скрытием формы и показом сообщения
    setTimeout(() => {
        formBox.classList.add('hidden');
        form.classList.add('hidden');
        title.classList.add('hidden');
        thankYouMessage.classList.remove('hidden'); // Убираем класс hidden, чтобы показать сообщение
        setTimeout(() => {
            formBox.classList.remove('hidden');
            formBox.classList.add('opacity-100');
            }, 100);
        form.submit();
    }, 500); // Время должно совпадать с длительностью анимации
});
