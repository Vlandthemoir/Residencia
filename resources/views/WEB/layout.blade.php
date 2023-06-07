<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		@stack('styles')
		<link rel="stylesheet" href="{{ asset('CSS/WEB/layout.css') }}">
		<script src="https://kit.fontawesome.com/fedfd2fc4a.js" crossorigin="anonymous"></script>

	</head>
	<body>
        <nav>
            <!--<a href="{{route('WEB.home')}}">Inicio</a>-->
            <a href="{{route('WEB.cursos')}}">Cursos</a>
            <a href="{{route('WEB.rutas')}}">Rutas</a>
            <a href="">Contacto</a>
            <div id="indicador"></div>
        </nav>

		<div class="general-container">
			@yield('content')
		</div>
        
	</body>
</html>