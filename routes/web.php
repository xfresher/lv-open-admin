<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;

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
    return redirect()->route('medias.index');
});

Route::group([
    'prefix' => 'medias',
    'as' => 'medias.',
], function () {
    Route::get('/', [MediaController::class, 'index'])->name('index');
    Route::get('/{media}', [MediaController::class, 'show'])->name('show');
});

