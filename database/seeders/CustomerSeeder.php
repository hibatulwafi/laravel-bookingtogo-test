<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Customer::create([
            'nationality_id' => 1,
            'cst_name' => 'John Doe',
            'cst_dob' => '1990-01-01',
            'cst_phoneNum' => '123456789',
            'cst_email' => 'john@example.com',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
