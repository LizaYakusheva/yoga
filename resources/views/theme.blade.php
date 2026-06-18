<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    @stack('styles')

    <title>Главная</title>
</head>
{{--ииии--}}
<body>
<header class="header-exact">
    <div class="menu-strip">
        <nav id="main-nav" class="nav-menu">
            <a href="{{ route('courses.index') }}">Онлайн-курсы</a>
            <a href="{{ route('practices') }}">Практики</a>
            <a href="{{ route('teachers') }}">Преподаватели</a>

            <span class="spacer"></span>

            <a href="{{ route('events.index') }}">Расписание</a>
            <a href="{{ route('subscriptions') }}">Абонементы</a>

            @auth
                @if(auth()->user()->name == 'Admin' && Hash::check('12345', auth()->user()->password))
                    <a href="{{ route('admin.applications.index') }}">Админ-панель</a>
                @else
                    <a href="{{ route('profile') }}">Личный кабинет</a>
                @endif
            @else
                <a href="{{ route('login.form') }}" class="ms-5">Войти</a>
            @endauth
        </nav>

        <div class="burger-btn" id="burger-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <a href="{{ route('home') }}" class="logo-overlay">
        <img src="{{ asset('img/logo.png') }}" alt="Логотип">
    </a>
</header>
@yield('banner')
<main class="container">
    @yield('content')
</main>
<footer>
    <div>
        <a href="{{ route('home') }}" class="header">
            <h1>GONG YOGA</h1>
            <p>йога & звукотерапия</p>
        </a>

        <a href="#">Политика конфиденциальности</a>
        <a href="#">Пользовательское соглашение</a>
    </div>

    <nav>
        <a href="{{ route('teachers') }}">Преподаватели</a>
        <a href="{{ route('practices') }}">Практики</a>
        <a href="{{ route('events.index') }}">Расписание</a>
        <a href="{{ route('subscriptions') }}">Абонементы</a>
    </nav>

    <div class="contacts">
        <p>Связь с нами <br> <a href="tel:+79258755552">+7 (925) 875-55-52</a></p>

        <div class="social">
            <p>Мы в социальных сетях</p>

            <div>
                <img src="{{ asset('img/icons/youtube.svg') }}" alt="YouTube" class="social_icon">
                <img src="{{ asset('img/icons/telegram.png') }}" alt="Telegram" class="social_icon">
                <img src="{{ asset('img/icons/instagram.svg') }}" alt="Instagram" class="social_icon">
            </div>
        </div>
    </div>
</footer>
@stack('scripts')
<script src="{{ asset('js/modal.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=109206799', 'ym');

    ym(109206799, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/109206799" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>
