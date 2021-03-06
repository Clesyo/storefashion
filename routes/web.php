<?php

use App\Mail\ActiveUser;
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
    $title = 'Store Fashion - Sua loja virtual ';
    $page = '';
    return view('main', compact('title','page'));
});

Route::get('active-user/{token}', function ($token) {
    return view('page-active',['token'=>$token]);
});

/* Route::get('active-user', function () {
    return view('page-active');
}); */
Route::get('active-user-confirmed', function () {
    return view('page-confirmed-active');
});

Route::post('active/{token}', 'UserController@activeUser');
Route::post('resend-mail/{id}', 'UserController@resendMail');

Route::get('teste-email', function (){
    $datas = [
        'name' => 'Clesyo Silva',
        'token' => 'ST-ksnAS98s'
    ];
    return new ActiveUser($datas);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cart', 'ShoppingCartController@cart');

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

Route::get('produto','SiteController@productView');
Route::get('produto-all','SiteController@productAll');

Route::post('estoque/store', 'ResaleProductController@store');
Route::post('detalhe/store', 'ProductDetailController@store');

Route::get('settings/permission','PermissionController@index');
Route::post('settings/permission/store','PermissionController@store');
Route::post('settings/permission/delete/{id}','PermissionController@destroy');
Route::post('settings/permission/active','PermissionController@active');

Route::get('settings/role','RoleController@index');
Route::get('settings/role/new','RoleController@create');
Route::post('settings/role/delete/{id}','RoleController@destroy');
Route::post('settings/role/store','RoleController@store');
Route::post('settings/role/active','RoleController@active');
Route::get('settings/role/edit/{id}','RoleController@edit');
Route::patch('settings/role/update/{id}','RoleController@update');

Route::get('settings/user','UserController@index');
Route::post('settings/user/include-role','UserController@includeRole');
