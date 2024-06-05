<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Nutrisi'],
            ['name' => 'Kesehatan Mental'],
            ['name' => 'Kesehatan Wanita'],
            ['name' => 'Penyakit Jantung'],
            ['name' => 'Penyakit Menular'],
            // Tambahkan kategori lainnya sesuai kebutuhan blog kesehatan
        ];

        // Memasukkan data ke dalam tabel categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
