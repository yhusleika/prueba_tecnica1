@extends('layouts.app')

@section('body')
    <h1>Editar Producto</h1>
    <hr>
    <form action="{{route('productos.update', $producto->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col md-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{$producto->nombre}}" >
            </div>
            <div class="col md-3">
                <label class="form-label">Precio:</label>
                <input type="number" name="precio" placeholder="Precio" class="form-control" value="{{$producto->precio}}" >
        </div>
        <div class="row">
            <div class="col md-3">
                <label class="form-label">Descripción:</label>
                <textarea name="descripcion" placeholder="Descripcion" class="form-control">{{$producto->descripcion}}"</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection