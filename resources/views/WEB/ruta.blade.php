@extends('WEB.layout')

@section('title')
Rutas
@endsection
@push('styles')
	<link href="{{ asset('CSS/WEB/ruta.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
@endpush

@section('content')
    <div id="mynetwork">

    </div>
@endsection
@if($dato == 1)
    <script type="text/javascript">
    let id = [],id_conectar = [],nombre = [];
    let objetos = {
    id_nodo: id,
    nombre:nombre,
    id_union:id_conectar,
    };
    fetch('http://127.0.0.1:8000/api/datos/titulo/1')
        .then(response => response.json())
        .then(data => {
        for (let i = 0; i < data.length; i++) {
            id.push(data[i].id);
            id_conectar.push(data[i].id_conectar);
            nombre.push(data[i].nombre);
        }

    //var nodes = new vis.DataSet();
    var nodes = new vis.DataSet([
            { id: 1, label: "Estructura de datos",shape: "box",color: "#ffee50",font: {size:25, color: "#000" }},
        ]);
    var edges = new vis.DataSet();
    for (let i = 0; i < objetos.id_nodo.length; i++) {
        nodes.add({ id: objetos.id_nodo[i], label: objetos.nombre[i], shape: "box", color: "#fff", font: { size: 15, color: "#000" } });
        edges.add({ from: objetos.id_nodo[i], to: objetos.id_union[i], arrows: "from" , color: { color: "black" }});
    }

    var container = document.getElementById("mynetwork");
    var data = {
        nodes: nodes,
        edges: edges,
    };

    var options = {
    nodes: {
        shape: "box",
    },
    };
    var network = new vis.Network(container, data, options);
    })
    .catch(error => console.error(error));
    </script>
@endif
@if($dato == 2)
    <script type="text/javascript">
    let id = [],id_conectar = [],nombre = [];
    let objetos = {
    id_nodo: id,
    nombre:nombre,
    id_union:id_conectar,
    };
    fetch('http://127.0.0.1:8000/api/datos/titulo/2')
        .then(response => response.json())
        .then(data => {
        for (let i = 0; i < data.length; i++) {
            id.push(data[i].id);
            id_conectar.push(data[i].id_conectar);
            nombre.push(data[i].nombre);
        }

    //var nodes = new vis.DataSet();
    var nodes = new vis.DataSet([
            { id: 93, label: "Primeros auxilios",shape: "box",color: "#ffee50",font: {size:25, color: "#000" }},
        ]);
    var edges = new vis.DataSet();
    for (let i = 0; i < objetos.id_nodo.length; i++) {
        nodes.add({ id: objetos.id_nodo[i], label: objetos.nombre[i], shape: "box", color: "#fff", font: { size: 15, color: "#000" } });
        edges.add({ from: objetos.id_nodo[i], to: objetos.id_union[i], arrows: "from" , color: { color: "black" }});
    }

    var container = document.getElementById("mynetwork");
    var data = {
        nodes: nodes,
        edges: edges,
    };

    var options = {
    nodes: {
        shape: "box",
    },
    };
    var network = new vis.Network(container, data, options);
    })
    .catch(error => console.error(error));
    </script>
@endif
@if($dato == 3)
    <script type="text/javascript">
    let id = [],id_conectar = [],nombre = [];
    let objetos = {
    id_nodo: id,
    nombre:nombre,
    id_union:id_conectar,
    };
    fetch('http://127.0.0.1:8000/api/datos/titulo/3')
        .then(response => response.json())
        .then(data => {
        for (let i = 0; i < data.length; i++) {
            id.push(data[i].id);
            id_conectar.push(data[i].id_conectar);
            nombre.push(data[i].nombre);
        }

    //var nodes = new vis.DataSet();
    var nodes = new vis.DataSet([
            { id: 73, label: "Trading",shape: "box",color: "#ffee50",font: {size:25, color: "#000" }},
        ]);
    var edges = new vis.DataSet();
    for (let i = 0; i < objetos.id_nodo.length; i++) {
        nodes.add({ id: objetos.id_nodo[i], label: objetos.nombre[i], shape: "box", color: "#fff", font: { size: 15, color: "#000" } });
        edges.add({ from: objetos.id_nodo[i], to: objetos.id_union[i], arrows: "from" , color: { color: "black" }});
    }

    var container = document.getElementById("mynetwork");
    var data = {
        nodes: nodes,
        edges: edges,
    };

    var options = {
    nodes: {
        shape: "box",
    },
    };
    var network = new vis.Network(container, data, options);
    })
    .catch(error => console.error(error));
    </script>
@endif
