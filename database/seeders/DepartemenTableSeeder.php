<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartemenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departemen')->insert([
            'nama_departemen' => 'Personalia',
            'deskripsi' => 'Personalia',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('departemen')->insert([
            'nama_departemen' => 'Accounting',
            'deskripsi' => 'Accounting',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('departemen')->insert([
            'nama_departemen' => 'Sales',
            'deskripsi' => 'Sales',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('departemen')->insert([
            'nama_departemen' => 'Gudang',
            'deskripsi' => 'Gudang',
            'informasi_tambahan' => 'Informasi tambahan disini',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
