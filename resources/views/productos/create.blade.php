@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Agregar Producto</h1>
    <hr>
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Precio" name="precio">
            </div>
        </div>
        <br>
        <div class="row g-3">
            <div class="col">
                <textarea class="form-control" placeholder="Descripción" name="descripcion"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </form>
@endsection