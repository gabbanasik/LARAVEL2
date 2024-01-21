<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
Route::get('banasik/310166/people', [PeopleController::class, 'index'])->name('people.index');
Route::get('banasik/310166/people/{id}', [PeopleController::class, 'show'])->name('people.show');
Route::post('banasik/310166/people/{id}', [PeopleController::class, 'update'])->name('people.update');
Route::delete('banasik/310166/people/{id}', [PeopleController::class, 'delete'])->name('people.delete');
Route::post('banasik/310166/people', [PeopleController::class, 'create'])->name('people.create');