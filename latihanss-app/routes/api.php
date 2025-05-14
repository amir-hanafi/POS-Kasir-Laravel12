<?php

use App\Http\Controllers\JenisBarangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('jenis_barang',JenisBarangController::class);

Route::post('/jenis_barang', [JenisBarangController::class, 'store']);
