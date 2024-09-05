<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\order;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'winda',
            'email' => 'winda2@gmail.com',
            'password' => bcrypt('12345')

            ]);

        product::create([
            'name' => 'Sepeda Anak',
            'harga' => '400000',
            'stok' => '7',
            'warna' => 'Merah',
            'size' => 'XL',
            'foto' => 'Mainan.jpg',
        ]);
        product::create([
            'name' => 'Alat Makan',
            'harga' => '90000',
            'stok' => '7',
            'warna' => 'Merah',
            'size' => 'sedang',
            'foto' => 'alatmakan.jpg',
        ]);
        product::create([
            'name' => 'Pembersih Dot Anak',
            'harga' => '250000',
            'stok' => '10',
            'warna' => 'Blue',
            'size' => 'Biasa',
            'foto' => 'pembersih.jpg',
        ]);
        product::create([
            'name' => 'Ayunan Anak',
            'harga' => '200000',
            'stok' => '10',
            'warna' => 'Hijau',
            'size' => 'Besar',
            'foto' => 'ayunan.jpg',
        ]);
        product::create([
            'name' => 'Kasur Main',
            'harga' => '150000',
            'stok' => '10',
            'warna' => 'pink',
            'size' => 'Sedang',
            'foto' => 'kasuranak.jpg',
        ]);
        product::create([
            'name' => 'Tempat Mandi Anak',
            'harga' => '200000',
            'stok' => '10',
            'warna' => 'Hitam',
            'size' => 'L',
            'foto' => 'mandi.jpg',
        ]);
        order::create([
            'name' => 'Winda',
            'email' => 'winda2@gmail.com',
            'alamat' => 'kp.cicarulang',
            'kota' => 'tasikmalaya',
            'kode_pos' => '4556',
            'metode_pembayaran' => 'COD',

        ]);






    }
}
