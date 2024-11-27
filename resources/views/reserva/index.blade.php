@extends('layouts.panelGerente')

@section('title', 'Ver Reserva')

@section('content')
        <!-- Main Content -->
        <div class="flex-1 p-8 main-content">
          <!-- Lista de reservas -->
          <ul role="list" class="divide-y divide-gray-100 text-sm">
              @foreach ($reservas as $reserva)
                  <li class="flex justify-between gap-x-6 py-4">
                      <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                              <!-- Información principal de la reserva -->
                              <p class="font-semibold text-gray-900">Cliente: {{ $reserva->cliente->nombre }}</p>
                              <p class="mt-1 truncate text-xs text-gray-500">Número de personas: {{ $reserva->num_personas }}</p>
                              <p class="mt-1 truncate text-xs text-gray-500">Descripción del Tour: {{ $reserva->tour->descripcion }}</p>
                          </div>
                      </div>
                      <div class="hidden sm:flex sm:flex-col sm:items-end">
                          <!-- Información secundaria -->
                          <p class="text-gray-900">Fecha de reserva: {{ \Carbon\Carbon::parse($reserva->fecha_creacion)->format('Y-m-d') }}</p>
                          
                          <!-- Verificar si existe un transporte antes de acceder a "tipo_transporte" -->
                          <p class="mt-1 text-xs text-gray-500">
                              Tipo de Transporte: 
                              @if($reserva->transporte)
                                  {{ $reserva->transporte->tipo_transporte }}
                              @else
                                  No disponible
                              @endif
                          </p>
                          <p class="mt-1 text-xs text-gray-500">Tour ID: {{ $reserva->tour_id_tour }}</p>
                      </div>
                  </li>
              @endforeach
          </ul>
        </div>
@endsection