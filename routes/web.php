<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\PeopleController;

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
    return view('home');
});
Route::get('/asd', function () {
    return 5;
});


/**
 * 
 * THIS IS A SOLUTION WITHOUT GROUPING!!!!!!!!!
 */
// Route::get('/people', [PeopleController::class, 'index']



// );
// Route::get('/people/create', [PeopleController::class, 'create']



// );
/**
 * INDEX FOR SHOWING
 * CREATE - CREATING A NEW ONE
 * SHOW TO SHOW A SPECIFIC ONE
 * STORE POST METHOD TO CREATE A NEW ONE
 */

Route::resource('people', PeopleController::class)->middleware('auth');
Route::resource('food', FoodController::class);
// Route::get('/people/{id}',[PeopleController::class, 'show']);

// Route::controller(PeopleController::class)->group(function () {
//     Route::get('/people', 'index');
//     Route::get('/people/create','create');
//     // Route::get('/people/{id}','show');
// Route::post('/people','store');

// });



// Route::get('/about', [PersonController::class, 'show']);
// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });
Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
