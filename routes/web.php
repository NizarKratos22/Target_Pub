<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\adminCrud;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\spec_client;
use App\Http\Livewire\Forms;

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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redir',[HomeController::class,'redir']);

//admin controller 




//emailcontroller.php
Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

//sendemailcontroller.php
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');
Route::get('send-email', [SendEmailController::class, 'index']);


//admin crud : 
//Route::resource('/index',[adminCrud::class,'index']);

Route::get('/forms',[Forms::class,'render']);
Route::get('/users',[Maincontroller::class,'render']);
Route::get('/specifications',[SpecificationController::class,'render']);
Route::get('/specclient',[spec_client::class,'render']);

