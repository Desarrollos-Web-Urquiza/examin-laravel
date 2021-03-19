@extends('layouts.plantilla')

@section('title', 'Name - ' . $Name->name)

@section('content')

    <h1>"Welcome {{$Name->name}} to the Name Page"</h1>
    <a href="{{route('nombre.index')}}">Volver a Names</a>
    <br>
    <a href="{{route('nombre.edit', $Name)}}">Editar apellido</a>
    <p><strong>Categoria: {{$Name->name}}</strong></p>
    <p><strong>{{$Name->descripcion}}</strong></p>

    <form action="{{route("nombre.destroy", $Name)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
