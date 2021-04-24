<?php

namespace App\Http\Controllers;

use App\Models\name;

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
    public function news (){
        return view("public.news") ;
    }
    public function login (){
        return view("public.login") ;
    }
}
