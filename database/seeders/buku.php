<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perpustakaan;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perpustakaan::factory(10)->create();
    }
}
