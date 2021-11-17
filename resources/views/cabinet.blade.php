@extends('layout.app')
@section('title', 'Городское развитие - личный кабинет')
@section('body')
<div class="user-pages">
    <div class="cabinet">
        <div class="cabinet__blocks cabinet__blocks-left ">
            <h1 class="head font-700">
                Личный кабинет
            </h1>
            <div class='font-300'>
            <?= Auth::User()->cabinet()?>
            </div>
        </div>
        <div class="cabinet__blocks">
            
            <form action="/DeAuthorisate" method="POST" class="form__box cabinet__button cabinet__forms">
                @csrf
                @method('get')
                <input type="submit" class="form__input cabinet__button" value="Выйти из аккаунта">
            </form>
        </div>
    </div>
    
</div>
@endsection