document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    let formData = new FormData(this);

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
            document.getElementById('successMessage').textContent = data.message;
            document.getElementById('successMessage').classList.remove('hidden');
            document.getElementById('orderForm').reset(); // Сбрасываем форму
        })
        .catch(error => {
            alert('Произошла ошибка. Пожалуйста, попробуйте еще раз.');
        });
});
