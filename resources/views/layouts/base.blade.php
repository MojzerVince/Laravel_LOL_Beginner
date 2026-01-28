<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD=======>>>>>>> 80badc49a2feb325d92c21e963cee573b85276bb

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
            <a href="{{ route('characters.index') }}" class="lol-characters">Szerezd meg az összes négert</a>
            <a href="{{ route('characters.create') }}" class="lol-add">Adj hozzá négert</a>
        </div>
        <div class="app-container">
            @yield('content')
        </div>
    </body>

</html>