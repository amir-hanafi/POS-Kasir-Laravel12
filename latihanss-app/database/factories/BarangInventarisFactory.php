<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangInventaris>
 */
class BarangInventarisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */
    public function definition(): array
    {
        $data = DB::table('jenis_barang')
                ->inRandomOrder()
                ->select('jns_brg_kode')
                ->first();
        return [
            //
            'br_kode' => "K".sprintf('%04d', fake()->unique()->numberBetween(1,9999)),
            'jns_brg_kode' => $data->jns_brg_kode,
            'user_id' => 1,
            'br_nama' => fake()->word(),
            'brg_tgl_terima' => fake()->date(),
            'brg_tgl_entry' => fake()->dateTime(),
            'br_status' => 1

        ];
    }
}
