<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Medicine;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {  
        $medicines = [
            [
                'id' => '1',
                'medicineName' => 'Antibiotics',
                'quantity' => 5,
                'patientName' => 'OdeDjinn',
                'patientType' => 'UniformedPersonnel',
                'prescriptionDate' => date('2024-06-07 14:36:59'),
                'physicianName' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
    
            [
                'id' => '2',
                'medicineName' => 'Antibiotics',
                'quantity' => 5,
                'patientName' => 'Yulia',
                'patientType' => 'Civilian',
                'prescriptionDate' => date('2024-06-07 14:36:59'),
                'physicianName' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ]
            ];
        DB::table('medicines')->insert($medicines);
    }
}
