<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'medicineName',
        'quantity',
        'patientName',
        'patientType',
        'prescriptionDate',
        'physicianName'
    ];
}
