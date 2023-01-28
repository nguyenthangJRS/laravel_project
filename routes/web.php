<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminProductController;

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

Route::get('/home',function(){
    return view('home');

})->name('home');

// controller into create category
Route::group([ 'prefix' =>'categories'],function(){
    Route::controller(CategoryController::class)->group(function (){
        Route::get('show','show')->name('categories.show');
        Route::get('create','create')->name('categories.create');
        Route::get('edit/{id}','edit')->name('categories.edit');
        Route::get('delete/{id}','delete')->name('categories.delete');
        Route::get('show_delete','show_deleted')->name('categories.show_deleted');
        Route::get('restore/{id}','restore')->name('categories.restore');

        Route::post('store','store')->name('categories.store');
        Route::post('update/{id}','update')->name('categories.update');

    });
});

Route::group(['prefix' => 'menu'],function(){
    Route::controller(MenuController::class)->group(function(){
        Route::get('show','showMenu')->name('menu.show');
        Route::get('add','create')->name('menu.add');
        Route::get('edit/{id}','edit')->name('menu.edit');
        Route::get('delete','delete')->name('menu.delete');
        Route::get('delete/{id}','delete')->name('menu.delete');

        Route::post('update/{id}','update')->name('menu.update');
        Route::post('store','store')->name('menu.store');
    });
});

Route::group(['prefix' => 'login'],function (){
    Route::controller(LoginController::class)->group(function (){
        Route::get('/','login')->name('login');
        Route::post('/check','check_login')->name('login.check');

    });
});

Route::group(['prefix' => '/product'],function(){
    Route::controller(AdminProductController::class)->group(function(){
        Route::get('/','index')->name('product.index');

    });
});
