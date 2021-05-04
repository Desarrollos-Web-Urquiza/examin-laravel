<?php

namespace App\Http\Controllers;

use App\Models\pages;

use Illuminate\Http\Request;

use App\Http\Requests\StoreName;

class PublicController extends Controller
{
    public function benefits (){
        return view("public.benefits") ;
    }
    public function contact (){
        return view("public.contact") ;
    }
    public function news (Pages $Pages){
        $page = Pages::get()[0];
        $page = $page['Novedad a agregar'];
        
        return view("public.news", compact("page")) ;
        // return $page['Novedad a agregar'];
    }
    public function login (){
        return view("public.login") ;
    }
}
