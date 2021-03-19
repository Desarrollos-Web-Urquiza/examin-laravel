@extends('layouts.plantilla')

@section('title', 'Name - Edit surname')

@section('content')

    <h1>"Welcome to the Edit"</h1>

    
    <form action="{{route('nombre.update', $Name)}}" method="POST">
        
        @csrf
        @method('put')        

        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $Name->name)}}">
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
            <textarea name="descripcion" rows="5" >{{old('descripcion',$Name->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
       
        <br>
        
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria', $Name->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>

        <button type="submit">Actualizar formulario</button>
    <form>
        
    
@endsection
