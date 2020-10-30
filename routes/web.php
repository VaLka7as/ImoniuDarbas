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

Route::get('/','App\Http\Controllers\CompaniesController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['App\Http\Middleware\Authenticate'])->group(function () {

        Route::get('/prideti-imone','App\Http\Controllers\CompaniesController@addCompanyPage');

        Route::get('/visos-imones','App\Http\Controllers\CompaniesController@allCompaniesPage');

        Route::get('/istrinti-imone/{id}','App\Http\Controllers\CompaniesController@deleteCompany');

        Route::get('/redaguoti-imone/{id}','App\Http\Controllers\CompaniesController@editCompanyPage');

        Route::post('/add-company','App\Http\Controllers\CompaniesController@storeCompany')->name('add-company');

        Route::post('/edit-company/{id}','App\Http\Controllers\CompaniesController@editCompany')->name('edit-company');
    });
