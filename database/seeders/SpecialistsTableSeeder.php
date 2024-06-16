<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialist::create([
            'specialist_name' => 'Cardiology',
        ]);

        Specialist::create([
            'specialist_name' => 'Neurology',
        ]);
    }
}
