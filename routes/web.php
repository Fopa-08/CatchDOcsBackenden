<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\AcceuilController;
use App\Http\Controllers\adminController;
use App\Models\admin;

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


Route::get('ViewDocs', function () {
    return view('ViewDocs');
});

Route::get('TableDocs', function () {
    return view('TableDocs');
});

Route::get('admin-dash-layout', function () {
    return view('admin-dash-layout');
});

Route::get('settings', function () {
    return view('settings');
});

Route::get('/user',[adminController::class,'user'] );


Route::get('office', function () {
    return view('office');
});

Route::get('administration', function () {
    return view('administration');
});

Route::get('acceuil', function () {
    return view('acceuil');
});

Route::get('consulter', function () {
    return view('consulter');
});

Route::get('research', function () {
    return view('research');
});
Route::get('addUser', function () {
    return view('addUser');
});
Route::get('addOffice', function () {
    return view('addOffice');
});
Route::get('addAdministration', function () {
    return view('addAdministration');
});

Auth::routes();

Route::post('',);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin',adminController::class);
// Route::get('/', [AcceuilController::class, 'index']);
Route::prefix('Acceuil')->namespace('App\Http\Controllers\AcceuilController')->group(function(){
    Route::get('/','AcceuilController@index')->name('Acceuil');
});