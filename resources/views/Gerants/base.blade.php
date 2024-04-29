<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mon application Laravel</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
