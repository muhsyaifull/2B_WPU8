<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Alamat;
use App\Models\Pendidikan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('image_path')->nullable();
            $table->timestamps();

        });

        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profile');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('dusun')->nullable();
            $table->string('poscode');
            $table->timestamps();
        });

        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profile');
            $table->string('jenjang');
            $table->string('nama_sekolah');
            $table->string('lokasi');
            $table->string('tanggal_masuk');
            $table->string('tanggal_lulus');
            $table->timestamps();
        });

        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profile');
            $table->string('nama_perusahaan');
            $table->string('posisi');
            $table->string('lokasi');
            $table->string('tanggal_masuk_kerja');
            $table->string('tanggal_keluar_kerja');
            $table->timestamps();
        });

        Schema::create('skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('profile');
            $table->string('nama_skill');
            $table->string('deskripsi_skill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
        Schema::dropIfExists('alamat');

    }
};
