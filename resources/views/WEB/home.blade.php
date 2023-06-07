@extends('WEB.layout')

@section('title')
Home
@endsection
@push('styles')
	<link href="{{ asset('CSS/WEB/home.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="banner">
    <div>Una nueva forma de aprender</div>
        <a href="/">ATHENA</a>
    <div>Unica y personalizada para ti</div>
</div>
@endsection