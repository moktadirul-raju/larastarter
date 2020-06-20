<?php

use Illuminate\Support\Facades\Route;

/*From:
https://www.youtube.com/watch?v=CowsopJhX3M&list=PLB4AdipoHpxaHDLIaMdtro1eXnQtl_UvE&index=2
Next:  3/54 -- min: 0.00
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
