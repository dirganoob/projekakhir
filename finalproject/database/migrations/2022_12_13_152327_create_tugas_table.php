<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('namatugas')->default('-');
            $table->string('deskripsi')->default('-');
            $table->date('tanggalpembuatan')->nullable();
            $table->date('batasakhir')->nullable();
            $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tidak tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
