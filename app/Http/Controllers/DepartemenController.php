<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DepartemenController;
use App\Models\Employee;
use App\Models\Departemen;

class DepartemenController extends Controller
{
    public function index()
    {
        $data= Departemen::all(); // Mengambil semua data karyawan
        // $departemen = Departemen::all();
        dd($data);
    }
    
}