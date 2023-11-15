<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Sesuaikan dengan namespace model Anda

class UserSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan contoh data ke tabel tb_user
        User::create([
            'name' => 'John Doe',
            'username' => 'john_doe',
            'password' => bcrypt('password123'),
        ]);

        User::create([
            'name' => 'Fikri Hairul',
            'username' => 'Fikri46',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'Syaifullah',
            'username' => 'Ipunk25',
            'password' => bcrypt('ipung12345'),
        ]);
        // Tambahkan lebih banyak data sesuai kebutuhan
    }
}

