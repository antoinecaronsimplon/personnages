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
@foreach ($character as $value)
    <span>{{ $value->Name }}</span>
@endforeach
    @include('header')
    @yield('content')
    @include('footer')
</body>
</html>