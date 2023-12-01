<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }} -@section('title')@endsection</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        <nav>
            <ul>
                  <li><a href="#">Acceuil</a></li>
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Réservation</a></li>
                  <li><a href="#">Contact</a></li>
            </ul>
          </nav>
    </header>
           @yield('content')
    <footer>
        <!-- TODO -->
</body>
</html>