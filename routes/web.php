<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/images/{filename}', function ($filename) {
    $path = storage_path('storage/images/' . $filename);
    if (!Storage::exists($path)) {
        abort(404);
    }
    return response()->file($path);
})->where('filename', '.*');
