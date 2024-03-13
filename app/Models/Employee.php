<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departemen;
use App\Models\Employee;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    public function departemen(){
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
