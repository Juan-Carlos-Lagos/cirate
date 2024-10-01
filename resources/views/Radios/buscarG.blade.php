@extends('layouts.plantilla')

@section('title', 'Buscar conversación')

@section('structure')
<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title h5 fw-bold">
        Búsqueda de conversaciones de radio
      </h3>
      <p class="card-text text-muted">Ingresa una fecha para ver las conversaciones.</p>
    </div>
    <div class="card-body">
      <form class="row g-3" method="GET" action="{{ route('radios.buscar') }}">
        <div class="col-12">
          <label for="date" class="form-label">Fecha</label>
          <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary w-100">
            Buscar
          </button>
        </div>
      </form>
    </div>
  </div>


  <div class="card mt-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table caption-bottom text-sm">
          <thead class="border-bottom">
            <tr class="table-secondary">
              <th scope="col">Alias</th>
              <th scope="col">Fecha de inicio</th>
              <th scope="col">Hora de inicio</th>
              <th scope="col">Fecha de finalización</th>
              <th scope="col">Hora de finalización</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($conversaciones) && count($conversaciones) > 0)
            @foreach($conversaciones as $conversacion)
            <tr class="border-bottom">
              <td class="p-4 align-middle">{{ $conversacion->alias_radio }}</td>
              <td class="p-4 align-middle">{{ $conversacion->fecha_recepcion }}</td>
              <td class="p-4 align-middle">{{ $conversacion->hora_recepcion }}</td>
              <td class="p-4 align-middle">{{ $conversacion->fecha_finalizacion }}</td>
              <td class="p-4 align-middle">{{ $conversacion->hora_finalizacion }}</td>
              <td class="p-4 align-middle">
                <!-- Botón de reproducir -->
              <td class="p-4 align-middle">
                <button class="btn btn-primary play-audio" data-audio="{{ asset('audios/' . $conversacion->fecha_recepcion . '.mp3') }}">
                  <i class="bi bi-play-fill"></i>
                </button>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="4" class="text-center">No se encontraron conversaciones para la fecha seleccionada.</td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Elemento de audio oculto -->
<audio id="audio-player" controls style="display:none;"></audio>

<!-- JavaScript para manejar la reproducción -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const audioPlayer = document.getElementById('audio-player');

    document.querySelectorAll('.play-audio').forEach(button => {
      button.addEventListener('click', function() {
        const audioFile = this.getAttribute('data-audio');
        audioPlayer.src = audioFile;
        audioPlayer.play();
      });
    });
  });
</script>
@endsection