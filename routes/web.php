<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AuthController::class,'home'])->name('home');
Route::get('home',[AuthController::class,'home'])->name('home');

Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});



Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
// });


Route::get('/show-data',[ProductsController::class,'showData']);
Route::get('/add-data',[ProductsController::class,'addData']);
Route::post('/store-data',[ProductsController::class,'storeData']);
Route::get('/edit-data/{id}',[ProductsController::class,'editData']);
Route::post('/store-edit-data/{id}',[ProductsController::class,'storeEditData']);
Route::get('/delete-data/{id}',[ProductsController::class,'deleteData']);
});