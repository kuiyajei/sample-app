<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::view('/','welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// Librarian routes - no role set yet though, just authentication
Route::resource('books', BookController::class)
->middleware('auth'); //  route name, controller path

require __DIR__.'/auth.php';
