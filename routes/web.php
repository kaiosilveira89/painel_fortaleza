<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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

Route::get('/teste', function () {
    return 'login';
});

/* Route::get('/admin_cras', function () {
    return view('pages/admin_cras');
});
 */
Route::get('/admincosan', function () {
    return view('pages/admin_cosan');
});

Route::get('/admincras', function () {
    return view('pages/admin_cras');
});


Route::resource('dashall', CardController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin_cras', [App\Http\Controllers\CadastrarController::class, 'index'])->name('admin_cras');
