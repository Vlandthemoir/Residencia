<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') - laravel</title>
		@stack('styles')
		<link rel="stylesheet" href="{{ asset('CSS/WEB/layout.css') }}">

	</head>
	<body>
        <nav>
            <a href="">Inicio</a>
            <a href="">Cursos</a>
            <a href="">Rutas</a>
            <a href="">Contacto</a>
            <div id="indicador"></div>
        </nav>

		<div class="general-container">
			@yield('content')
		</div>
        
	</body>
</html>