<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Dokter;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ambil semua kategori dan dokter dari database
        $categories = Category::all();
        $doctors = Dokter::all();

        // Pastikan ada kategori dan dokter di database
        if ($categories->isEmpty() || $doctors->isEmpty()) {
            $this->command->info('Please seed the categories and doctors tables first!');
            return;
        }

        $blogs = [
            [
                'judul' => 'Manfaat Nutrisi Seimbang untuk Kesehatan',
                'id_doctor' => $doctors->random()->id,
                'id_category' => $categories->where('name', 'Nutrisi')->first()->id,
                'slug' => 'manfaat-nutrisi-seimbang-untuk-kesehatan',
                'body' => 'Artikel ini membahas tentang pentingnya nutrisi seimbang untuk kesehatan tubuh.',
                'img' => 'nutrition.jpg',
                'kutipan' => 'Pentingnya nutrisi seimbang untuk kesehatan tubuh.',
                'release_date' => Carbon::now(),
            ],
            [
                'judul' => 'Cara Mengatasi Stres dan Kecemasan',
                'id_doctor' => $doctors->random()->id,
                'id_category' => $categories->where('name', 'Kesehatan Mental')->first()->id,
                'slug' => 'cara-mengatasi-stres-dan-kecemasan',
                'body' => 'Artikel ini memberikan tips dan trik untuk mengatasi stres dan kecemasan.',
                'img' => 'mental_health.jpg',
                'kutipan' => 'Tips dan trik untuk mengatasi stres dan kecemasan.',
                'release_date' => Carbon::now(),
            ],
            [
                'judul' => 'Panduan Kesehatan untuk Wanita Hamil',
                'id_doctor' => $doctors->random()->id,
                'id_category' => $categories->where('name', 'Kesehatan Wanita')->first()->id,
                'slug' => 'panduan-kesehatan-untuk-wanita-hamil',
                'body' => 'Artikel ini memberikan panduan kesehatan untuk wanita hamil.',
                'img' => 'women_health.jpg',
                'kutipan' => 'Panduan kesehatan lengkap untuk wanita hamil.',
                'release_date' => Carbon::now(),
            ],
            [
                'judul' => 'Penyakit Jantung: Gejala dan Pencegahan',
                'id_doctor' => $doctors->random()->id,
                'id_category' => $categories->where('name', 'Penyakit Jantung')->first()->id,
                'slug' => 'penyakit-jantung-gejala-dan-pencegahan',
                'body' => 'Artikel ini membahas gejala dan cara pencegahan penyakit jantung.',
                'img' => 'heart_disease.jpg',
                'kutipan' => 'Gejala dan cara pencegahan penyakit jantung.',
                'release_date' => Carbon::now(),
            ],
            [
                'judul' => 'Cara Mencegah Penyakit Menular',
                'id_doctor' => $doctors->random()->id,
                'id_category' => $categories->where('name', 'Penyakit Menular')->first()->id,
                'slug' => 'cara-mencegah-penyakit-menular',
                'body' => 'Artikel ini memberikan informasi tentang cara mencegah penyakit menular.',
                'img' => 'infectious_disease.jpg',
                'kutipan' => 'Informasi tentang cara mencegah penyakit menular.',
                'release_date' => Carbon::now(),
            ],
        ];

        // Memasukkan data ke dalam tabel blogs
        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
