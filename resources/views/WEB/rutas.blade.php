@extends('WEB.layout')

@section('title')
Rutas
@endsection
@push('styles')
	<link href="{{ asset('CSS/WEB/rutas.css') }}" rel="stylesheet">
@endpush

@section('content')


<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="rutas-container">
    <div class="card-grid">
        <a class="card" href='/ruta/1'>
        <div class="background" style="background-image: url(https://images.pexels.com/photos/614117/pexels-photo-614117.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)"></div>
        <div class="card-content">
            <p class="card-category">Category</p>
            <h3 class="card-title">Estructuras de datos</h3>
        </div>
        </a>
        <a class="card" href="/ruta/2">
        <div class="background" style="background-image: url(https://images.pexels.com/photos/6519904/pexels-photo-6519904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)"></div>
        <div class="card-content">
            <p class="card-category">Category</p>
            <h3 class="card-title">Primeros auxilios</h3>
        </div>
        </a>
        <a class="card" href="/ruta/3">
        <div class="background" style="background-image: url(https://images.pexels.com/photos/844124/pexels-photo-844124.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)"></div>
        <div class="card-content">
            <p class="card-category">Category</p>
            <h3 class="card-title">Criptomonedas</h3>
        </div>
        </a>
    <div>
</section>


@endsection