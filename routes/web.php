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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/env', function() {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
});

Route::any('/practice/{n?}', 'PracticeController@index');

Route::get('/', 'BudgetController@index');
Route::get('/budget', 'BudgetController@budget');

Route::post('/budget/change', 'BudgetController@change');
