<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    //
    use HasFactory;
    protected $table = 'jenis_barang';
    protected $fillable = ['jns_brg_kode','jns_brg_nama'];
    protected $primaryKey = 'jns_brg_kode';
    public $timestamp = true;
}
