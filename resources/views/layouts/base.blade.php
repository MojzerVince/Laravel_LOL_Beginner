<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>League of Legends</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Welcome To Summoner's Rift</h1>
    @yield('pageTitle')
    <hr>

    <div class="nav-container">
        <a href="{{ route("characters.index") }}" class="lol-accept-btn">Get All Characters</a>
        <a href="{{ route("characters.create") }}" class="lol-accept-btn">Add new Character</a>
    </div>

    <div class="app-container">
        @yield('content')
    </div>
</body>

</html>
