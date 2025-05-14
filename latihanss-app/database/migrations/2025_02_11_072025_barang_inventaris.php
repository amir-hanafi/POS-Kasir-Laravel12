<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('barang_inventaris', function (Blueprint $table) {
            $table->string('br_kode',12)->primary();
            $table->string('jns_brg_kode',5);
            $table->string('user_id',10);
            $table->string('br_nama',50);
            $table->date('brg_tgl_terima');
            $table->dateTime('brg_tgl_entry');
            $table->char('br_status',2);
            $table->softDeletes();
            $table->foreign('jns_brg_kode')->references('jns_brg_kode')->on('jenis_barang')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
