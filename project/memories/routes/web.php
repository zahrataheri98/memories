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

use App\model\Memories;

Route::get('/', function () {

    if(\Illuminate\Support\Facades\Auth::user())
    {
        $memories = Memories::get();
        return view('list',compact('memories'));
    }
    else
    {
        return view('auth/login');

    }
});



Route::get('create' , 'MemoriesController@create')->name('create');
Route::get('getList' , 'MemoriesController@getList')->name('getList');
Route::get('edit/{id}' , 'MemoriesController@edit')->name('edit');
Route::get('show/{id}' , 'MemoriesController@show')->name('show');
Route::get('delete/{id}' , 'MemoriesController@delete')->name('delete');
Route::post('patch/{id}' , 'MemoriesController@patch')->name('patch');
Route::post('store' , 'MemoriesController@store')->name('store');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
