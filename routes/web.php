<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatronController;
use App\Http\Livewire\Patrons;

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


//! -- All users --
Route::view('/','welcome'); // SYNTAX: 1st param - url; 2nd param - view page's name / function from controller or path
//Route::get('','');

//* "usually you'd want to set the route in a controller function" - TraversyMedia
// METHOD 1
// Route::get('/', function(){ 
//     return view('welcome');
// });

// METHOD 2 "preferred"
Route::get('/','App\Http\Controllers\Public\PageController@home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//! -- Dynamic view depending on Role --
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//! -- Librarian routes - no role set yet though, just authentication --
Route::resource('books', BookController::class) //  route name, controller
->middleware('auth'); 

// Route::resource('patrons', PatronController::class)
// ->middleware('auth');


Route::get('/patron',Patrons::class)->name('patron')->middleware('auth'); // (customer URL, livewireComponentNameSlashController)

require __DIR__.'/auth.php';
