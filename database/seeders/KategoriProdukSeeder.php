<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProduk::create(
            [
                'nama_kategori' => 'PAUD/TK',
            ]
        );

        KategoriProduk::create(
            [
                'nama_kategori' => 'SD',
            ]
        );

        KategoriProduk::create(
            [
                'nama_kategori' => 'SMP',
            ]
        );

        KategoriProduk::create(
            [
                'nama_kategori' => 'SMA/SMK',
            ]
        );

        KategoriProduk::create(
            [
                'nama_kategori' => 'UMUM',
            ]
        );
    }
}
