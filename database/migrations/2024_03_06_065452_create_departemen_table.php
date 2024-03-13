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
        Schema::create('departemen', function (Blueprint $table) {
            $table->id('departemen_id');
            $table->string('nama_departemen');
            $table->string('deskripsi');
            $table->text('informasi_tambahan')->nullable();
            $table->timestamps();
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('nama');
            $table->string('nomor_identitas');
            $table->string('jabatan');
            $table->unsignedBigInteger('departemen_id');
            $table->foreign('departemen_id')->references('departemen_id')->on('departemen');
            $table->string('alamat');
            $table->string('email');
            $table->string('nomor_telepon');
            $table->text('informasi_tambahan')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departemen');
        Schema::dropIfExists('employees');
    }
};
