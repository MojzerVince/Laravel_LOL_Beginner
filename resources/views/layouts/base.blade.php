<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOL</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body>
    <h1>Üdv a niggerek szurdokában</h1>
    @yield('pageTitle')
    <hr>
    <div class="nav-container">
        <div class="menu">
            <a href="{{ route('characters.index') }}" class="lol-characters">Szerezd meg az összes négert</a>
            <a href="{{ route('characters.create') }}" class="lol-add">Adj hozzá négert</a>
            <a href="{{ route('characters.trashed') }}" class="lol-trashed">Törölt négerek</a>
        </div>
        <div class="auth-menu">
            @guest
                <a href="{{ route('login') }}" class="lol-characters">Élettelen bejelentkezés</a>
                <a href="{{ route('register') }}" class="lol-add">Sajnálatos módon regisztráció</a>
            @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="lol-add">Kilépés végre</button>
                </form>
            @endguest
        </div>
    </div>
    <div class="app-container">
        @yield('content')
    </div>
</body>

</html>