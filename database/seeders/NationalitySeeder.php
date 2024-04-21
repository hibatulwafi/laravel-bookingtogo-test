<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nationality;

class NationalitySeeder extends Seeder
{
    public function run()
    {
        Nationality::create([
            'nationality_name' => 'Indonesia',
            'nationality_code' => 'ID',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}