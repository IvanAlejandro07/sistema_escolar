<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocentesController;

use App\Models\Alumnos;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/auth', function () {
    return view('auth.login');
});


Route::get('/admin/ralumno', function () {
    return view('admin.registroalumnos');
});
Route::get('/admin/rdocente', function () {
    return view('admin.registrodocentes');
});

Route::get('/alumno', function () {
    return view('alumno.dashboardalumno');
});

Route::get('/docente', function () {
    $alumnos = Alumnos::get();
    
    return view('docente.dashboardmaestro', ['alumnos'=>$alumnos]);
});

// Route::get('/alumno', function () {
//     return view('alumno.dashboardalumno');
// });


// Route::controller(DocentesController::class)->group(function(){
//     Route::get('/docente', 'home');

// });