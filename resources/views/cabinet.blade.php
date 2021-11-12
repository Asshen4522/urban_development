@extends('layout.app')
@section('title', 'Городское развитие - личный кабинет')
@section('body')
<div class="author">
    <h1 class="head font-700">
        Личный кабинет
    </h1>
    <div>
        <a href="/test">проба</a>
    </div>
    <div>
        
        <form action="/DeAuthorisate" method="POST" class="form__box">
            @csrf
            @method('post')
            <input type="submit" class="form__input" value="Выйти из аккаунта">
        </form>
    </div>
</div>
@endsection