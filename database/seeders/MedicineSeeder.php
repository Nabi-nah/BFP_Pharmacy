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
                'medicine_name' => 'antibiotics',
                'quantity' => 5,
                'patient_name' => 'OdeDjinn',
                'patient_type' => 'UniformedPersonnel',
                'prescription_date' => date('2024-06-07 14:36:59'),
                'physician_name' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
    
            [
                'id' => '2',
                'medicine_name' => 'Antibiotics',
                'quantity' => 5,
                'patient_name' => 'Yulia',
                'patient_type' => 'Civilian',
                'prescription_date' => date('2024-06-07 14:36:59'),
                'physician_name' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '3',
                'medicine_name' => 'LOZENGES',
                'quantity' => 7,
                'patient_name' => 'Ethan',
                'patient_type' => 'UniformedPersonnel',
                'prescription_date' => date('2024-06-07 14:36:59'),
                'physician_name' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '4',
                'medicine_name' => 'lozenges',
                'quantity' => 8,
                'patient_name' => 'Kobe',
                'patient_type' => 'Non-UniformedPersonnel',
                'prescription_date' => date('2024-06-07 14:36:59'),
                'physician_name' => 'Hannah',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            ];
        DB::table('medicines')->insert($medicines);
    }
}
