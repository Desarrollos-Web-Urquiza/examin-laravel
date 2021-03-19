<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\PublicController;

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

Route::get('/', HomeController::class);

Route::get('nombre', [   NameController::class,  'index'   ])->name("nombre.index");

Route::get('beneficios', [   PublicController::class,  'benefits'   ])->name("nombre.beneficios");

Route::get('nombre/apellido', [   NameController::class,  "surname"   ])->name("nombre.apellido");

Route::post('nombre', [   NameController::class,  "store"   ])->name("nombre.store");

Route::get('nombre/{name}', [   NameController::class,  "name"   ])->name("nombre.show");

Route::get('nombre/{name}/edit', [   NameController::class,  "edit"   ])->name("nombre.edit");

Route::put('nombre/{name}', [   NameController::class,  "update"   ])->name("nombre.update");

Route::delete('nombre/{name}', [   NameController::class,  "destroy"   ])->name("nombre.destroy");   

// Route::resource('nombre', NameController::class) ->names([
//     'create' => 'nombre.apellido'
// ]);


