<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('contact')->group(callback: function (){
    Route::controller(\App\Http\Controllers\MessageController::class)->group(function (){
        Route::get('/', 'show');
        Route::get('/create', 'create');
        Route::post('/store', 'store')->name('message.store');

    });

});
