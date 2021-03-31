<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Prodi::factory(10)->create();
    }
}
