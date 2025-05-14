<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jenisBarangController;

Route:: apiResource('jenis_barang', jenisBarangController::class);