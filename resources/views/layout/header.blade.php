
<header class="header">
    <div class="header__left">
        <a href="/main" class="font-700 header__elem">Городской портал</a>
    </div>
    <div class="header__right">
        <a href="/main" class="header__elem font-300-kur">Главная</a>
        <a href="/registration" class="header__elem font-300-kur">Зарегестрироваться</a>
        @guest
            <a href="/authorisation" class="header__elem font-300-kur">Войти</a>
        @endguest
        @auth
            <button class="header__elem font-300-kur" id="menu_button"><?= Auth::User()->getFio()?></button>
            <ul class="header__account-menu-close" id="menu_list">
                <li><a href="/cabinet" class="header__elem font-300-kur">Личный кабинет</a></li>
                <li><a href="#" class="header__elem font-300-kur">Мои заявки</a></li>
                <li><a href="#" class="header__elem font-300-kur">Новая заявка</a></li>
                <li><a href="/DeAuthorisate" class="header__elem font-300-kur">Выход</a></li>
            </ul>
        @endauth
        
    </div>
</header>