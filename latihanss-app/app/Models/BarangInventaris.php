<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangInventaris extends Model
{
    use HasFactory;
    protected $table = 'barang_inventaris';
    protected $fillable = ['br_kode','jns_brg_kode','user_id','br_nama','br_tgl_terima','br_tgl_entry','br_status'];
}