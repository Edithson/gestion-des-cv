<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
</head>
<body>
    <section>
        <div class="navBar">
            <ul>
                <h2><li><a href="{{route('cv.index')}}">Accueil</a></li></h2>
                <h2><li><a href="{{route('cv.create')}}">Nouveau</a></li></h2>
            </ul>
        </div>
        @yield('content')
    </section>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>