<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\EventController;
Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/contacto',[EventController::class, 'contact']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
//Route::get('/contacto', function () {
  //  return view('contact');
  Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');

//});
Route::get('/produtos', function () {
    $busca=request('search');
    return view('products', ['busca'=>$busca]);
});
Route::get('/produtos_teste/{id?}', function ($id= null) {
    return view('produt', ['id'=> $id]);
});
/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
