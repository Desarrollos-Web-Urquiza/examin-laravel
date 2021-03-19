<?php

namespace App\Http\Controllers;

use App\Models\name;

use Illuminate\Http\Request;

use App\Http\Requests\StoreName;

class NameController extends Controller
{
    public function index (){
        $name = Name::orderBy('id', 'desc')->paginate();
        return view("names.index", compact("name")) ;
    }

    public function name (Name $Name){
        // $name = Name::find($id);
        return view("names.name", compact("Name")) ;
    }

    public function edit (Name $Name){
        // $name = Name::find($id);
        // return $name ;
        // return $Name ;
        return view("names.edit", compact('Name')) ;
    }

    public function update (Request $request, Name $Name){
        // $name = Name::find($id);
        // return $name ;
        // return $Name ;
        // return $request->all() ;

        // $Name->name=  $request->name;
        // $Name->descripcion =  $request->descripcion;
        // $Name->categoria =  $request->categoria;

        // $Name->save();

        $Name->update($request->all());

        return redirect()->route('nombre.show', $Name) ;
        // return route($Name) ;
    }

    public function surname (){
        return view("names.surname") ;
    }

    public function store (StoreName $request){
        // return $request->all() ;

        // $apellido = new Name();
        // $apellido->name = $request->name;
        // $apellido->descripcion = $request->descripcion;
        // $apellido->categoria = $request->categoria;

        // $apellido->save() ;
        
        // $apellido = Name::create([
        //     'name' =>  $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria
        // ]);

        $apellido = Name::create($request->all());

        return redirect()->route('nombre.show', $apellido) ;
    }

    public function destroy (Name $Name){
        $Name->delete();

        return redirect()->route('nombre.index') ;
    }
    
}
