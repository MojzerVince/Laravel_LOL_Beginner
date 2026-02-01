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
    <h2>Milyen érzés izzadtseggűnek és buzinak lenni?</h2>
    @yield('pageTitle')
    <hr>
    <div class="nav-container">
        <a href="{{ route('characters.index') }}" class="lol-characters">Szerezd meg az összes négert</a>
    </div>
    <div class="app-container">
        <p>Hatalmas discord mod dózist fogsz kapni</p>
        @yield('content')
    </div>
</body>

</html>