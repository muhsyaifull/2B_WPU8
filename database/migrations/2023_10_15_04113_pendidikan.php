<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id('pendidikan_id');
            $table->string('jenjang');
            $table->string('nama_sekolah');
            $table->string('lokasi');
            $table->string('tanggal_masuk');
            $table->string('tanggal_lulus');
            $table->string('no_telepon');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
