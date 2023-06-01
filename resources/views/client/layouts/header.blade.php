<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<div class="header">
    <div class="empty"></div>
    <div class="navBar">
        <ul>
            <li><a href="#" class="header_links">Отзывы</a></li>
            <li><a href="{{ route('garantii') }}" class="header_links">Гарантии</a></li>
            <li><a href="{{ route('category') }}" class="header_links">Каталог</a></li>
        </ul>
    </div>

    <div class="user">
        <p class="userName">Hanzed Rules</p>
        <img src="images/avatar.png" alt="" class="avatar"/>
    </div>

    <div class="auth-section">
        @guest
            <a href="{{ route('login') }}" class="auth-link">Вход</a>
            <a href="{{ route('register') }}" class="auth-link">Регистрация</a>
        @else
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="userDropdownMenu">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Выход</a></li>
                </ul>
            </div>
        @endguest
    </div>
</div>

<div class="finder">
    <a href="{{ route('main') }}" class="logoText" style="text-decoration: none;">
        <img src="images/logo1.png" alt="Лого" class="logo1">
        <div class="logoText-1">TechBazaar</div>
    </a>
    <div class="lines">
        <img src="images/line.png" alt="" class="line">
        <img src="images/line2.png" alt="" class="line2">
    </div>
    <input type="text" placeholder="Поиск" class="input">
    <div class="actions">
        <img src="images/like.png" alt="" class="like_button">
        <img src="images/cart.png" alt="">
    </div>
</div>

<hr>
