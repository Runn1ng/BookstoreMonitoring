<?php

use App\Customer;
use App\OrderBooks;
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
    return view('welcome');
});

Route::get('/stat', function() {
    return view('stat', ['users' => count(Customer::all()), 'orders' => count(OrderBooks::all())]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
