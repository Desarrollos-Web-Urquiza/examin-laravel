<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreName;
use App\Models\schools;
use App\Models\courses;
use App\Models\students;
use App\Models\tests;

class ProfesorController extends Controller
{
    public function homeProfesor(){
        return view("public.profesor.homeProfesor") ;
    }     
    public function testGenerator(){
        return view("public.profesor.testGenerator") ;
    }   
    public function testQuestionsGenerator(){
        return view("public.profesor.testQuestionsGenerator") ;
    }      
    public function testSearch(){
        return view("public.profesor.testSearch") ;
    }
    public function createStudent(schools $schools){
        $Schools = schools::get();
        return view("public.profesor.createStudent",  compact('Schools') ) ;
    }
    public function createStudent2(courses $courses){
        $courses = courses::get();
        return view("public.profesor.createStudent2",  compact('courses')) ;
    }
    public function createCourse(schools $schools){
        $Schools = schools::get();
        return view("public.profesor.createCourse",  compact('Schools')) ;
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
    public function addCourse(Request $request, courses $courses){
        courses::create($request->all());
        return redirect()->route('crear_curso')  ;
    }
    public function addStudent(Request $request, students $students){
        students::create($request->all());
        return redirect()->route('ver_alumnos')  ;
    }
    public function addTest(Request $request, tests $tests){
        // tests::create($request->all());
        // return redirect()->route('ver_alumnos')  ;
        return $request  ;
    }
}