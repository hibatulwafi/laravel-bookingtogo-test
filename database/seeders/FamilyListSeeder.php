<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FamilyList;

class FamilyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        FamilyList::create([
            'cst_id' => 1,
            'fl_name' => 'Jane Doe',
            'fl_dob' => '1995-05-05',
        ]);

        FamilyList::create([
            'cst_id' => 1,
            'fl_name' => 'Yan Doe',
            'fl_dob' => '1995-02-05',
        ]);
    }
}
