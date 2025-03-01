document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    let formData = new FormData(this); // Создаем объект FormData из формы

    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest' // Указываем, что это AJAX-запрос
        }
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Произошла ошибка');
            }
            return response.json(); // Парсим JSON-ответ
        })
        .then(data => {
            document.getElementById('thankYouMessage').textContent = data.message;
            document.getElementById('thankYouMessage').classList.remove('hidden');
            document.getElementById('reviewForm').reset(); // Сбрасываем форму
        })
        .catch(error => {
            alert('Произошла ошибка. Пожалуйста, попробуйте еще раз.');
        });
});
