@extends('layout.app')
@section('title', 'Городское развитие - авторизация')
@section('body')
<div class="author">
    <h1 class="head font-700">
        Форма авторизации
    </h1>

    <form action="/Authorisate" method="POST" class="form__box">
        @csrf
        @method('post')
        <input type="email" name="email" class="form__input" placeholder="Почта" required>
        <input type="password" name="password" class="form__input" placeholder="Пароль" required>
        <input type="submit" class="form__input" value="Войти">

    </form>
</div>
@endsection