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
    return view('welcome');
});

//Route::get('pattern/{n}', 'PatternController@show')->where('n', '[0-9]+');
Route::get('singleton', 'PatternControllers@show');
Route::get('factory', 'PatternControllers@factory');
Route::get('facade', 'PatternControllers@facade');
Route::get('aggregation', 'PatternControllers@aggregation');
Route::get('observer', 'PatternControllers@observer');
Route::get('strategie', 'PatternControllers@strategie');
Route::get('command', function () {
    return view('command');
});
Route::get('template', 'PatternControllers@template');