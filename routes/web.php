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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('perfil', 'CompanyController@index');
Route::post('company/store', 'CompanyController@store');

Route::get('categorias', 'CategoryController@index');
Route::post('categorias/store', 'CategoryController@store');

Route::get('cores', 'ColorController@index');
Route::post('cores/store', 'ColorController@store');

Route::get('marcas', 'BrandController@index');
Route::post('marcas/store', 'BrandController@store');



Route::get('produtos', 'ProductController@index');
Route::get('produtos/novo', 'ProductController@create');
Route::get('produtos/edit/{id}', 'ProductController@edit');
Route::post('produtos/store', 'ProductController@store');
Route::post('produtos/vitrine/status', 'ProductController@alterStatusShowcase');
Route::post('produtos/status', 'ProductController@alterStatusProduct');

Route::post('estoque/store', 'ResaleProductController@store');
Route::post('detalhe/store', 'ProductDetailController@store');

Route::get('settings/permission','PermissionController@index');
Route::post('settings/permission/store','PermissionController@store');
Route::post('settings/permission/delete/{id}','PermissionController@destroy');
Route::post('settings/permission/activi','PermissionController@activiti');

Route::get('settings/role','RoleController@index');

Route::get('settings/user','UserController@index');
