@extends('layouts.plantilla')

@section('title','Nuevo Registro')

@section('structure')

@if (session('success'))
<div class="alert alert-success" id="success-message">
    {{ session('success') }}
</div>
@endif

<div class="card w-100 max-w-md mx-auto">
    <div class="card-body">
        <h3 class="card-title h5 font-weight-bold">Agregar nuevo número de teléfono</h3>
        <p class="card-text text-muted">Ingresa los detalles del nuevo número de teléfono.</p>
    </div>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="phone-number">Número de teléfono</label>
                <input type="tel" class="form-control" id="phone-number" placeholder="+57" name="numero">
            </div>
            <div class="form-group">
                <label for="owner">Propietario</label>
                <input type="text" class="form-control" id="owner" placeholder="Nombre del propietario" name="cliente">
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" class="form-control" id="address" placeholder="Dirección" name="direccion">
            </div>
            <div class="form-group">
                <label for="city">Ciudad</label>
                <input type="text" class="form-control" id="city" placeholder="Ciudad" name="ciudad">
            </div>
            <hr>
            <div class="form-group">
                <label for="comments">Comentarios</label>
                <textarea class="form-control" id="comments" rows="3" placeholder="Comentarios adicionales" name="comentario"></textarea>
                <small class="form-text text-muted">
                    Agrega cualquier comentario adicional sobre este número de teléfono.
                </small>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
        </div>
    </form>
</div>

<script src="{{ asset('js/alerts.js') }}"></script>
<script src="{{ asset('js/alerts.js')}}"></script>

@endsection