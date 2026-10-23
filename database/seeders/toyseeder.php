<?php

namespace Database\Seeders;

use App\Models\Toy;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        $toys = [
            [
                'name' => 'Boneka Beruang Ceria',
                'age_group' => '3-8 tahun',
                'category' => 'Boneka',
                'price' => 85000,
                'image' => 'assets/images/teddy bear.jpg',
                'description' => 'Boneka beruang lembut untuk menemani waktu bermain anak.',
            ],
            [
                'name' => 'Balok Susun Kreatif',
                'age_group' => '3-7 tahun',
                'category' => 'Edukasi',
                'price' => 65000,
                'image' => 'assets/images/balok susun.jpg',
                'description' => 'Balok warna-warni untuk melatih kreativitas dan koordinasi anak.',
            ],
            [
                'name' => 'Mobil Balap Mini',
                'age_group' => '4-10 tahun',
                'category' => 'Kendaraan',
                'price' => 45000,
                'image' => 'assets/images/cars.jpg',
                'description' => 'Mobil mainan mini untuk permainan balap yang menyenangkan.',
            ],
            [
                'name' => 'Puzzle Hewan',
                'age_group' => '4-8 tahun',
                'category' => 'Puzzle',
                'price' => 38000,
                'image' => 'assets/images/puzzle-hewan.jpg',
                'description' => 'Puzzle hewan untuk melatih logika dan kemampuan memecahkan masalah.',
            ],
            [
                'name' => 'Set Alat Masak Mini',
                'age_group' => '3-8 tahun',
                'category' => 'Pretend Play',
                'price' => 72000,
                'image' => 'assets/images/alat masak.jpg',
                'description' => 'Mainan alat masak untuk mengembangkan imajinasi anak.',
            ],
            [
                'name' => 'Robot Petualang',
                'age_group' => '5-10 tahun',
                'category' => 'Robot',
                'price' => 99000,
                'image' => 'assets/images/robot.jpg',
                'description' => 'Robot mainan untuk permainan petualangan yang seru.',
            ],
            [
                'name' => 'Papan Gambar Anak',
                'age_group' => '3-9 tahun',
                'category' => 'Kreativitas',
                'price' => 56000,
                'image' => 'assets/images/papan gambar.jpg',
                'description' => 'Papan gambar untuk mendukung kreativitas dan aktivitas menggambar.',
            ],
            [
                'name' => 'Pesawat Terbang Mini',
                'age_group' => '4-9 tahun',
                'category' => 'Kendaraan',
                'price' => 42000,
                'image' => 'assets/images/pesawat mainan.jpg',
                'description' => 'Mainan pesawat mini untuk permainan imajinatif anak.',
            ],
        ];

        foreach ($toys as $toy) {
            Toy::updateOrCreate(
                ['name' => $toy['name']],
                $toy
            );
        }
    }
}