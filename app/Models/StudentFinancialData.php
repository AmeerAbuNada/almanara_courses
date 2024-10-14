<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFinancialData extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id', 'id');
    }
}
