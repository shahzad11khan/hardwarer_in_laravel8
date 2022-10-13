<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\CategoryController;
use  App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'redirect']);
// Route::get('/category/home',[CategoryController::class,'create'])->name('category.home');
// Route::post('/category/home',[CategoryController::class,'store'])->name('category.store');
Route::resource('category', 'App\Http\Controllers\CategoryController');//update delete edit store index show
Route::resource('category', 'App\Http\Controllers\HomeController');
Route::get('category/uedit/{id}',[HomeController::class,'uedit'])->name('category.uedit');//update delete edit store index show
Route::put('category/uupdate/{id}',[HomeController::class,'uupdate'])->name('category.uupdate');//update delete edit store index show
Route::get('user.home', [HomeController::class,'redirect'])->name('home');
Route::get('/list', [HomeController::class,'listview'])->name('list');
Route::get('/listt', [HomeController::class,'Customer'])->name('listt');


    // return $id
// });//update delete edit store index show
// wait jani start
// Route::resource(' category', 'App\Http\Controllers\userController');//update delete edit store index show


//wait


Route::get('/list',[HomeController::class,'listview'])->name('list');

Route::get('/listt',[HomeController::class,'customer'])->name('listt');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
