<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name("index");

Route::get('beneficios', [   PublicController::class,  'benefits'   ])->name("beneficios");

Route::get('contacto', [   PublicController::class,  'contact'   ])->name("contacto");

Route::get('novedades', [   PublicController::class,  'news'   ])->name("novedades");

Route::get('login', [   PublicController::class,  'login'   ])->name("login");

Route::post('users', [   PublicController::class,  'users'   ])->name("users");

Route::get('Index_Profesor', [   ProfesorController::class,  'homeProfesor'   ])->name("Index_Profesor");

Route::get('generar_evaluacion', [   ProfesorController::class,  'testGenerator'   ])->name("generar_evaluacion");

Route::get('buscar_evaluacion', [   ProfesorController::class,  'testSearch'   ])->name("buscar_evaluacion");

Route::get('crear_alumno', [   ProfesorController::class,  'createStudent'   ])->name("crear_alumno");

Route::get('crear_alumno2', [   ProfesorController::class,  'createStudent2'   ])->name("crear_alumno2");

Route::get('crear_curso', [   ProfesorController::class,  'createCourse'   ])->name("crear_curso");

Route::get('crear_escuela', [   ProfesorController::class,  'createSchool'   ])->name("crear_escuela");

Route::get('ver_alumnos', [   ProfesorController::class,  'myStudents'   ])->name("ver_alumnos");

Route::post('crear_escuela', [   ProfesorController::class,  'addSchool'   ])->name("addSchool");

Route::post('crear_curso', [   ProfesorController::class,  'addCourse'   ])->name("addCourse");

Route::post('crear_alumno', [   ProfesorController::class,  'addStudent'   ])->name("addStudent");

// Route::get('nombre', [   NameController::class,  'index'   ])->name("nombre.index");

// Route::get('nombre/apellido', [   NameController::class,  "surname"   ])->name("nombre.apellido");

// Route::post('nombre', [   NameController::class,  "store"   ])->name("nombre.store");

// Route::get('nombre/{name}', [   NameController::class,  "name"   ])->name("nombre.show");

// Route::get('nombre/{name}/edit', [   NameController::class,  "edit"   ])->name("nombre.edit");

// Route::put('nombre/{name}', [   NameController::class,  "update"   ])->name("nombre.update");

// Route::delete('nombre/{name}', [   NameController::class,  "destroy"   ])->name("nombre.destroy");   

// Route::resource('nombre', NameController::class) ->names([
//     'create' => 'nombre.apellido'
// ]);


