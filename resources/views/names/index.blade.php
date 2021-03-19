@extends('layouts.plantilla')

@section('title', 'Name - Home')

@section('content')

    <h1>"Welcome to the Name Page"</h1>
    <a href="{{route('nombre.apellido')}}">Crear apellido</a>
    <ul>
        @foreach ($name as $nombre)
            <li>
                <a href="{{route('nombre.show',  $nombre->id)}}">{{$nombre->name}}</a>              
            </li>
        @endforeach    
    </ul>

    {{$name->links()}}

@endsection


