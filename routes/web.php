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

Route::group(['middleware' => 'localization'], function() {
    Route::get('lang/{locale}', 'Admins\AdminController@switchLanguage')
        ->name('lang');
});

//Admin

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admins\AdminController@index')->name('dashboard');
    Route::resource('products', 'Admins\ProductController', [
        'names' => [
            'index' => 'products.index',
            'destroy' => 'task.destroy',
        ]
    ]);
    Route::resource('supliers', 'Admins\SuplierController', [
        'names' => [
            'index' => 'supliers.index',
            'create' => 'supliers.create',
            'store' => 'supliers.store',
            'edit' => 'supliers.edit',
            'destroy' => 'supliers.destroy',
        ]
    ]);
});
