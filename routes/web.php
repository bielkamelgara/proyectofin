<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientcompanyController;
use App\Http\Controllers\ProjectchiefController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ResponsibleunitController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('buildings', BuildingController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('clientcompanies', ClientcompanyController::class);
Route::resource('projectchiefs', ProjectchiefController::class);
Route::resource('projects', ProjectController::class);
Route::resource('units', UnitController::class);
Route::resource('teams', TeamController::class);
Route::resource('responsibleunits', ResponsibleunitController::class);







