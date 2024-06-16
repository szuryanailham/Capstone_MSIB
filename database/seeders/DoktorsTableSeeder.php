<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoktorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'nama_doktor' => 'Dr. John Doe',
            'specialist_id' => 1, 
        ]);

        Dokter::create([
            'nama_doktor' => 'Dr. Jane Smith',
            'specialist_id' => 2, 
        ]);
    }
}
