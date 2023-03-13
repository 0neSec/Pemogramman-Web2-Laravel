<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::prefix('user')->group(function () {
        // Matches The "/admin/users" URL
        // Route::get('/insert', [UserController::class, 'user']);
        Route::get('/insert', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'store']);
        Route::get('/update', [UserController::class, 'update']);
        Route::get('/delete/{id}', [UserController::class, 'delete']);

});
 


// Route::get('/greeting', [::class, ];
