<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Matakuliah::factory(10)->create();
    }
}
