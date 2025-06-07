<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);

        DB::table('hero_sections')->insert([
            'title' => 'Selamat Datang di NexaCore',
            'subtitle' => 'Kami membangun solusi digital terbaik untuk masa depan Anda.',
            'image_path' => 'images/hero.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('company_descriptions')->insert([
            'company_name' => 'NexaCore',
            'tagline' => 'Solusi Digital Masa Depan',
            'description' => 'NexaCore adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital untuk berbagai sektor industri.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('about_us')->insert([
            'title' => 'Tentang Kami',
            'content' => 'Kami adalah tim profesional yang berdedikasi untuk menciptakan solusi digital inovatif dan efisien.',
            'image_path' => 'images/about.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('services')->insert([
            [
                'title' => 'Web Development',
                'description' => 'Membangun website profesional dengan performa tinggi.',
                'icon_class' => 'fas fa-code',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App',
                'description' => 'Aplikasi Android dan iOS yang mudah digunakan.',
                'icon_class' => 'fas fa-mobile-alt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Desain antarmuka modern dan user-friendly.',
                'icon_class' => 'fas fa-pencil-ruler',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        DB::table('projects')->insert([
            [
                'title' => 'Website E-Commerce',
                'slug' => Str::slug('Website E-Commerce'),
                'description' => 'Kami membangun platform toko online untuk klien fashion.',
                'image_path' => 'projects/ecommerce.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aplikasi Kasir',
                'slug' => Str::slug('Aplikasi Kasir'),
                'description' => 'Sistem kasir berbasis mobile untuk UMKM.',
                'image_path' => 'projects/kasir.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Company Profile Site',
                'slug' => Str::slug('Company Profile Site'),
                'description' => 'Website profil perusahaan berbasis Laravel.',
                'image_path' => 'projects/profile.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('contact_infos')->insert([
            'address' => 'Jl. Teknologi No. 88, Jakarta',
            'email' => 'info@nexacore.com',
            'phone' => '+62 812 3456 7890',
            'google_maps_embed' => '<iframe src="https://maps.google.com/..." width="100%" height="250" style="border:0;" allowfullscreen loading="lazy"></iframe>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('contact_messages')->insert([
            [
                'name' => 'Andi Wijaya',
                'email' => 'andi@example.com',
                'subject' => 'Kerja Sama Website',
                'message' => 'Saya tertarik bekerja sama untuk pembuatan website.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sinta Dewi',
                'email' => 'sinta@example.com',
                'subject' => 'Penawaran Mobile App',
                'message' => 'Apakah bisa dibuatkan aplikasi untuk toko saya?',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
