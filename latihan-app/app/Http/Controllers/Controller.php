<?php

namespace App\Http\Controllers;

use App\Models\jenisBarang;

abstract class Controller
{

    public function index()
    {
    $data = jenisBarang::get();
    return response()->json($data);
    }
}
