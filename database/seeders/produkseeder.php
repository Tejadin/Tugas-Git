<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
         ['name'=> 'Kopi Torabika', 'price' => 7000.00, 'description' => 'Kopi instan', 'created_at'=> now()],
         ['name'=> 'Mocacino', 'price' => 15000.00, 'description' => 'Minuman kopi susu', 'created_at'=> now()],
         ['name'=> 'Machallate', 'price' => 20000.00, 'description' => 'Minuman premium', 'created_at'=> now()],
         ['name'=> 'Roti Coklat', 'price' => 10000.00, 'description' => 'Makanan', 'created_at'=> now()],
         ['name'=> 'Pizza', 'price' => 20000.00, 'description' => 'Makanan', 'created_at'=> now()],
        ]);
    }
}
