<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = {
            'nama_kelas' => 'XII-RPL',
            'jurusan' => 'Rekayasa perangkat lunak'
        };

        DB::table('table_kelas')->insert($data);

        $data = [
            'nama_kelas' => 'XII-RPl',
            'jurusan' => 'Rekayasa p'
        ]
    }
}
