
<header class="header">
    <div class="header__logo">
        <a href="/">  test </a>
    </div>
    <nav class="header__nav">
        <div class="header__search">
            <button type="button" name="button"> <img class="svg" src="/src/img/header_search.svg" alt=""> </button>
        </div>
        <div class="header__section">
            <div class="header__item">
                <a href="#"> <span class="header__heading">menu</span></a>
            </div>
            <div class="header__item">
                <a href="#">
                    <img class="svg" src="/src/img/menu_bag.svg" alt="">
                    <span class="header__heading">1</span>
                </a>
            </div>
            @if(Auth::check())
                <div class="header__menu">
                    <a class="header__menu-btn">  <img class="svg" src="/src/img/menu_icon.svg" alt=""> <span class="header__heading">{{ Auth::user()->name }}</span> </a>
                    <div class="header__dropdown">
                        <a href="/admin">Administration panel</a>
                        <a href="#">Settings</a>
                        <a href="/logout">Log out</a>
                    </div>
                </div>
            @else
                <div class="header__item">
                    <a href="/login"> <span class="header__heading">Авторизация</span></a>
                </div>

                <div class="header__item">
                    <a href="/register"> <span class="header__heading">Регистрация</span></a>
                </div>
        @endif
    </nav>
    <div class="header__menubtn">
        <button class="menuBtn">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </button>
    </div>
</header>

