<?php

namespace App\Http\Controllers;

use App\Models\pages;

use App\Models\users;

use Illuminate\Http\Request;

use App\Http\Requests\StoreName;
use PhpParser\Node\Stmt\If_;

class ProfesorController extends Controller
{
    public function homeProfesor(){
        return view("public.profesor.homeProfesor") ;
    }     
    public function testGenerator(){
        return view("public.profesor.testGenerator") ;
    }      
    public function testSearch(){
        return view("public.profesor.testSearch") ;
    }
    public function createStudent(){
        return view("public.profesor.createStudent") ;
    }
    public function createStudent2(){
        return view("public.profesor.createStudent2") ;
    }
    public function createCourse(){
        return view("public.profesor.createCourse") ;
    }
    public function createSchool(){
        return view("public.profesor.createSchool") ;
    }
}
