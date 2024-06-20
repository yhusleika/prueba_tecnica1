@extends('layouts.app')

@section('body')
    <div class="d-flex aling-items-center justify-content-between">
        <h1 class="mb-0">Lista de Productos</h1>
        <a href="{{route('productos.create')}}" class="btn btn-primary">Agregar Producto</a>
    </div>
    <hr>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td class="aling-middle">{{$producto->id}}</td>
                    <td class="aling-middle">{{$producto->nombre}}</td>
                    <td class="aling-middle">{{$producto->descripcion}}</td>
                    <td class="aling-middle">{{$producto->precio}}</td>
                    <td class="aling-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('productos.show', $producto->id)}}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{route('productos.edit', $producto->id)}}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{route('productos.destroy', $producto->id)}}" method="POST" type="button" class="btn btn-sm btn-danger">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection