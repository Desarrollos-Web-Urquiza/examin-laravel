<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\SessionController;

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

Route::get('generar_preguntas', [   ProfesorController::class,  'testQuestionsGenerator'   ])->name("generar_preguntas");

Route::get('buscar_evaluacion', [   ProfesorController::class,  'testSearch'   ])->name("buscar_evaluacion");

Route::get('crear_alumno', [   ProfesorController::class,  'createStudent'   ])->name("crear_alumno");

Route::get('crear_alumno2', [   ProfesorController::class,  'createStudent2'   ])->name("crear_alumno2");

Route::get('crear_curso', [   ProfesorController::class,  'createCourse'   ])->name("crear_curso");

Route::get('crear_escuela', [   ProfesorController::class,  'createSchool'   ])->name("crear_escuela");

Route::get('ver_alumnos', [   ProfesorController::class,  'myStudents'   ])->name("ver_alumnos");

Route::get('responder_preguntas', [   ProfesorController::class,  'answerQuestions'   ])->name("responder_preguntas");

Route::post('crear_escuela', [   ProfesorController::class,  'addSchool'   ])->name("addSchool");

Route::post('crear_curso', [   ProfesorController::class,  'addCourse'   ])->name("addCourse");

Route::post('crear_alumno', [   ProfesorController::class,  'addStudent'   ])->name("addStudent");

Route::post('crear_evaluacion', [   ProfesorController::class,  'addTest'   ])->name("crear_evaluacion");

Route::get('session/get', [   SessionController::class,  'getSessionDate'   ])->name("session.get");

Route::get('session/set', [   SessionController::class,  'storeSessionData'   ])->name("session.store");

Route::get('session/remove', [   SessionController::class,  'deleteSessionData'   ])->name("session.delete");




