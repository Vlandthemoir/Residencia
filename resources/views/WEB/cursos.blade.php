@extends('WEB.layout')

@section('title')
Cursos
@endsection
@push('styles')
	<link href="{{ asset('CSS/WEB/cursos.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="cursos-container">
    <div class="search-container">
        <form action="">
            <input type="text" placeholder="&#xf002; Buscar..">
            <button id="buscar"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="dropdown-container">
            
            <button id="boton" onclick="cambiarTexto()">Ordenar por ></button>         
                <div id="menu" class="dropdown-menu">
                    <a href="#" ><i class="fa-solid fa-arrow-up-a-z"></i> <b>Nombre(A-Z)</b></a>
                    <a href="#" ><i class="fa-solid fa-arrow-down-a-z"></i> <b>Nombre(Z-A)</b></a>
                    <a href="#" ><i class="fa-solid fa-arrow-up-a-z"></i> <b>Categoria(A-Z)</b></a>
                    <a href="#" ><i class="fa-solid fa-arrow-down-a-z"></i> <b>Categoria(Z-A)</b></a>
                </div>
        </div>
    </div>
    <div class="cards-container">
        @foreach($objetos as $item)
        <div class="card">
            <a href="#"></a>
            <img src='https://images.pexels.com/photos/3729557/pexels-photo-3729557.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1' alt=''>
            <div class="card-overlay">
                <div class="title">
                    <h3>{{$item->nombre}}</h3>
                    <p>
                        {{$item->nombre_conectar}}
                    </p>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit velit nec libero efficitur, sed blandit mi gravida. Curabitur a ante vitae mi dapibus rhoncus sit amet quis sapien.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
<script>

function cambiarTexto() {
    var menuSecundario = document.getElementById("menu");
    var boton = document.getElementById("boton");

    if (boton.innerText === "Ordenar por >") {
        boton.innerText = "Ordenar por <";
        menuSecundario.style.display = "flex";
    }else{
        boton.innerText = "Ordenar por >";
        menuSecundario.style.display = "none";
    }
};


</script>