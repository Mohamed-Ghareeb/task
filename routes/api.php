<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Api\\AuthController@login');
    Route::post('logout', 'Api\\AuthController@logout');
});


Route::prefix('admin')->middleware(['auth:api', 'is_admin'])->group(function () {    
    Route::resource('companies', 'Api\\CompanyController');
    Route::resource('employees', 'Api\\EmployeeController');

});
