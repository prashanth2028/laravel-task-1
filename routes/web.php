<?php

use App\Http\Controllers\Employeecontroller;
use App\Http\Controllers\internscontroller;
use App\Http\Controllers\Usersformcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[internscontroller::class,'insert_form']);
Route::post('create',[internscontroller::class,'insert']);
Route::get('view',[internscontroller::class,'select']);
Route::get('edit/{id}',[internscontroller::class,'edit']);
Route::post('edit/{id}',[internscontroller::class,'update']);
Route::get('delete/{id}',[internscontroller::class,'delete']);
Route::get('delete_all',[internscontroller::class,'delete_all']);
Route::get('/index',[Usersformcontroller::class,'create']);
Route::post('/store',[Usersformcontroller::class,'store']);
Route::get('list',[Usersformcontroller::class,'list']);
Route::get('edit/{id}',[Usersformcontroller::class,'edit']);
Route::post('update/{id}',[Usersformcontroller::class,'update']);
Route::get('delete/{id}',[Usersformcontroller::class,'delete']);

