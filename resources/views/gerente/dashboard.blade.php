@extends('layouts.panelGerente')

@section('title', 'Panel Gerente')

@section('content')
    @if ($reservas->isEmpty())
    <p>No hay reservas disponibles.</p>
    @else
    
        <x-lista-reservas :reservas="$reservas" />
    @endif
@endsection