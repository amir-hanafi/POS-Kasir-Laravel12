<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Kelas', [KelasController::class, 'index']);
