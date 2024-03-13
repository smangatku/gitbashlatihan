<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Employee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama' => 'John Doe',
            'nomor_identitas' => '123456789',
            'jabatan' => 'Manager',
            'departemen_id' => 1, // Sesuaikan dengan id departemen yang ada
            'alamat' => 'Jl. Contoh No. 123',
            'email' => 'john.doe@example.com',
            'nomor_telepon' => '081234567890',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('employees')->insert([
            'nama' => 'tester',
            'nomor_identitas' => '333333',
            'jabatan' => 'Manager',
            'departemen_id' => 2, // Sesuaikan dengan id departemen yang ada
            'alamat' => 'Jl. Contoh No. 123',
            'email' => 'tester@example.com',
            'nomor_telepon' => '081234567890',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
