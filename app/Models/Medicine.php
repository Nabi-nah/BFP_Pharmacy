<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicine_name',
        'quantity',
        'patient_name',
        'patient_type',
        'prescription_date',
        'physician_name'
    ];
}
