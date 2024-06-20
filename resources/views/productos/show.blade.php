@extends('layouts.app')

@section('body')
    <h1>Detalles del Producto</h1>
    <hr>
    <div class="row">
        <div class="col md-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$producto->nombre}}" readonly>
        </div>
        <div class="col md-3">
            <label class="form-label">Precio:</label>
            <input type="number" name="precio" placeholder="Precio" class="form-control" value="{{$producto->precio}}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col md-3">
            <label class="form-label">Descripción:</label>
            <textarea name="descripcion" class="form-control" readonly>{{$producto->descripcion}}</textarea>
        </div>
    </div>
@endsection