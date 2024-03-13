<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\KaryawanController;
use App\Models\Employee;
use App\Models\Departemen;
use DB;
use Input;

class KaryawanController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); // Mengambil semua data karyawan
        $data = DB::select('SELECT 
        b.employee_id,
        b.nama,
        b.nomor_identitas,
        b.jabatan,
        b.departemen_id,
        b.alamat,
        b.email,
        b.nomor_telepon,
        b.informasi_tambahan,
        b.created_at,
        b.updated_at,
        a.nama_departemen
        
    FROM
        departemen a
            JOIN
        employees b ON a.departemen_id = b.departemen_id;');
    

        return view('karyawan', compact('data')); // Mengirim data ke view employees.blade.php
    }
    
    public function show(string $id)
    {
        $employee_id = $id;
        $karyawan = Employee::findOrFail($employee_id);

        if (!$karyawan) {
            return response()->json(['error' => 'Karyawan not found'], 404);
        }
       
        return response()->json($karyawan);
        
    }

    function data(){
        switch (Input::get('a')) {

            case 'get':

                
                $employee_id = Input::get('id');
                $karyawan = Employee::findOrFail($employee_id);
                return response()->json($karyawan);
                break;

            default:
         return '!! Method not found !!';
           break;
            }
    }
}