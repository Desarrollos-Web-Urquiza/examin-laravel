@extends('layouts.plantilla')

@section('title', 'Name - Surname')

@section('content')

    <h1>"Welcome to the Surname Page"</h1>

    
    <form action="{{route('nombre.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"  >{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
       
        <br>
        
        <label>
            Categoria:
            <input type="text" name="categoria"  value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>

        <button type="submit">Enviar formulario</button>
    <form>
        
    
@endsection
