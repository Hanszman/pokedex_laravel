<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Título -->
    <title>@yield('titulo')</title> <!-- Título muda para cada página -->
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="{{route('home')}}">
            <i class="fa fa-home" style="color: #E3350D;" aria-hidden="true"></i>
            &nbsp Pokédex
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('pokemon', 1) }}">Kanto</a></li>
                        <li><a href="{{ route('pokemon', 2) }}">Johto</a></li>
                        <li><a href="{{ route('pokemon', 3) }}">Hoenn</a></li>
                        <li><a href="{{ route('pokemon', 4) }}">Sinnoh</a></li>
                        <li><a href="{{ route('pokemon', 5) }}">Unova</a></li>
                        <li><a href="{{ route('pokemon', 6) }}">Kalos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
@yield('content')
</div>

</body>
</html>