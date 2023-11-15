<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Profile::create([
        //     'nama' => 'Fikri Hairul Fahri',
        //     'deskripsi' => 'Programmer Politeknik Negeri Bandung',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'agama' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'no_telepon' => 'required',
        //     'email' => 'required',
        // ]);

        // Profile::create([
        //     'user_id' => $profile->id,
        //     'provinsi' => $request->provinsi,
        //     'kota' => $request->kota,
        //     'kecamatan' => $request->kecamatan,
        //     'kelurahan' => $request->kelurahan,
        //     'dusun' => $request->dusun,
        //     'poscode' => $request->poscode,
        // ]);
    }
}
