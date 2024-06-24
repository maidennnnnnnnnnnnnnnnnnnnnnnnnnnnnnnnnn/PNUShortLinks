<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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

Route::get("/test", function() {
    phpinfo();
});

Route::get("/links/custom_not_found", function() {
    return view('links.custom_not_found');
})->name('links.custom_not_found');

Route::get("/links/custom_no_response", function() {
    return view('links.custom_no_response');
})->name('links.custom_no_response');


Route::resource("/link", LinkController::class);
Route::get('/links', [LinkController::class, 'index'])->name('link.index');
Route::get('/links/create', [LinkController::class, 'create'])->name('link.create');
Route::post('/links', [LinkController::class, 'store'])->name('link.store');
Route::get('/{short_link}', [LinkController::class, 'redirectToLink'])->name('link.redirect');
Route::get('/links/custom_no_response', function() {

    return view('links.custom_no_response');
})->name('links.custom_no_response');
