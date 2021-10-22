@extends('layout.app')
@section('title', 'Городское развитие - главная')
@section('body')

<div class="entry">
    <div class="entry__header font-700">
        Привет, дорогой друг!
    </div>
    <div class="entry__text font-300">
        Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому мы предлагаем тебе помочь своему городу!
    </div>
    <div class="entry__footer font-300">
        Увидел проблему? Дай нам знать о ней и мы ее решим!
    </div>
    <div class="entry__buttons">
        <a href="#" class="entry__button font-300-kur">Сообщить о проблеме</a>
        <a href="#" class="entry__button font-300-kur">Присоединиться к проекту</a>
    </div>
</div>



<div class="container">
    <h2>Последние решенные проблемы</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ asset('img/solve2.png') }}" alt="Яма на дороге">
                <img src="img/problem2.png" alt="Яма на дороге">
            </div>
        </div>
    </div>
</div>
@endsection
