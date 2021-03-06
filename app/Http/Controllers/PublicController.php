<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SessionController;

use App\Models\pages;

use App\Models\users;

use Illuminate\Http\Request;

use App\Http\Requests\StoreName;
use PhpParser\Node\Stmt\If_;

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
    }
    public function login (){
        return view("public.login") ;
    }

    public function users (Request $request, Users $Users, SessionController $SessionController){

        
        $users = Users::where("Usuario","=", $request->user)->where("Contrasenia","=", $request->password)->get() ;
      
        if($users == "[]")  {
            $users = redirect()->route('login') ;
        }  else {
            // $users = $request->all();
            $SessionController->storeSessionData($request);
            $users = redirect()->route('Index_Profesor') ;
        }
        return $users ;
    }

}
