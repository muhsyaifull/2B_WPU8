<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->text('experience');
            $table->text('education');
            $table->string('email');
            $table->string('no_telepon');
            $table->string('skill');
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('resume');
    }
};
