<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__inner-title">FashionablyLate</h1>
        </div>
        <nav>
            <ul class="header-nav">
                <li class="header-nav__item">
                    @yield('login')
                    @yield('register')
                </li>
                 @if (Auth::check())
                <li class="header-nav__item">
                    <form class="form" action="/logout" method="post">
                        @csrf
                        <button class="header-nav__button">logout</button>
                    </form>
                </li>
                @endif
            </ul>
        </nav>
        <hr width="100%">
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>