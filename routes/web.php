
<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/','departmentsController@index');

Route::resource('dep', 'departmentsController');

Route::resource('part', 'PartnerController');

Route::resource('mat', 'MaterialsController');

Route::resource('type', 'TypeProductController');

Route::resource('Pro', 'ProductController');

Route::resource('emp', 'employeeController');

Route::resource('admin', 'adminController');

Route::resource('comp', 'componentController');

Route::resource('comde', 'componentdetailController');