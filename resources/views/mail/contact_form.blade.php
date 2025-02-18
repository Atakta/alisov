<!DOCTYPE html>
<html>
<head>
    <title>Новое сообщение с сайта</title>
</head>
<body>
<h1>Новое сообщение</h1>
<p><strong>Имя:</strong> {{ $data['name'] }}</p>
<p><strong>Электронная почта:</strong> {{ $data['email'] }}</p>
<p><strong>Телефон:</strong> {{ $data['phone'] }}</p>
<p><strong>Сообщение:</strong></p>
<p>{{ $data['message'] }}</p>
</body>
</html>
