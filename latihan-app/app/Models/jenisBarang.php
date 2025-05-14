<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenisBarang extends Model
{
    //
    protected $table = 'jenis_barang';
    protected $fillable = ['jns_brg_kode','jns_brg_nama'];
}
