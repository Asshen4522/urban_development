<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="head">
        Форма регистрации
    </h1>
    <ul>
        <form action="/test" method="POST" class="form__box">
            @csrf
            <input type="text"name="FIO" class="form__input" placeholder="ФИО*" required>
            <input type="text" name="Login" class="form__input" placeholder="Логин*" required>
            <input type="email" name="email" class="form__input" placeholder="Почта" required>
            <input type="password" name="password" class="form__input" placeholder="Пароль" required>
            <input type="password" name="password_check" class="form__input" placeholder="Подтверждение пароля" required>
            <label>
                <input type="checkbox" name="sogl" class="form__input"required>
                Обработка пользовательских данных?
            </label>
            <input type="submit" class="form__input" value="Отправить">

        </form>
    </ul>
</body>
</html>