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
}
