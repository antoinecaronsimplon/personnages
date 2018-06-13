<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Personnages</title>
</head>
<body>
    @include('header')
    <main>
        @yield('listpage')
        @yield('viewpage')
    </main>
    @include('footer')
</body>
</html>