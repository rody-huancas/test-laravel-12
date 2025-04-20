@extends('layouts.app')

@section('title', 'Inicio')

@push('css')
    <style>
        body {
            background-color: #272626da;
            color: white;
        }
    </style>
@endpush

@section('content')
    <div class="max-w-7xl mx-auto px-4">
        <h1>Bienvenido</h1>
    </div>

    <x-alert2 type="success" class="mb-4">
        <x-slot name="title">
            Alerta!!
        </x-slot>
        Contenido de la alerta
    </x-alert2>

    <p>Hola Mundo</p>
@endsection
