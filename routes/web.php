<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CategoryController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Admin Routes here
Route::get('/home', function(){
	return view('admin.home');
});

Route::middleware(['auth:sanctum'])->group(function(){
	//Category Routes here
	Route::resource('category','CategoryController');

	//Category Routes here
	Route::resource('brand','BrandController');
});
