<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreName;
use App\Models\schools;

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
    public function createCourse(schools $schools){
        $Schools = schools::get();
        $schoolsValues = []  ;
        $i = 0 ;
        foreach ($Schools as $value){
            $schoolsValues[$i] = $value['Escuela'] ;
            $i++ ;
        } 

        return view("public.profesor.createCourse",  compact('schoolsValues')) ;
        // return $schoolsValues ;
    }
    public function createSchool(){
        return view("public.profesor.createSchool") ;
    }
    public function myStudents(){
        return view("public.profesor.myStudents") ;
    }
    public function addSchool(Request $request, schools $schools){
        schools::create($request->all());
        return redirect()->route('crear_escuela')  ;
    }
}