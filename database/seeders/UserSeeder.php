<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id' => '1',
                'name' => 'National HQ',
                'email' => 'bfp.health.nhq@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '2',
                'name' => 'Region 1',
                'email' => 'bfp.health.r1@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '3',
                'name' => 'Region 2',
                'email' => 'bfp.health.r2@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '4',
                'name' => 'Region 3',
                'email' => 'bfp.health.r3@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '5',
                'name' => 'Region 4A',
                'email' => 'bfp.health.r4a@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '6',
                'name' => 'Region 4B',
                'email' => 'bfp.health.r4b@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '7',
                'name' => 'Region 5',
                'email' => 'bfp.health.r5@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '8',
                'name' => 'Region 6',
                'email' => 'bfp.health.r6@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '9',
                'name' => 'Region 7',
                'email' => 'bfp.health.r7@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '10',
                'name' => 'Region 8',

                'email' => 'bfp.health.r8@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '11',
                'name' => 'Region 9',

                'email' => 'bfp.health.r9@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '12',
                'name' => 'Region 10',

                'email' => 'bfp.health.r10@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '13',
                'name' => 'Region 11',

                'email' => 'bfp.health.r11@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '14',
                'name' => 'Region 12',
                'email' => 'bfp.health.r12@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '15',
                'name' => 'BARMM',
                'email' => 'bfp.health.barmm@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '16',
                'name' => 'CAR',
                'email' => 'bfp.health.car@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '17',
                'name' => 'CARAGA',
                'email' => 'bfp.health.caraga@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '18',
                'name' => 'NCR',
                'email' => 'bfp.health.ncr@gmail.com',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '19',
                'name' => 'librok',
                'email' => 'oysuba@up.edu.ph',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '20',
                'name' => 'han',
                'email' => 'hdbuizon@up.edu.ph',
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            ];
        DB::table('users')->insert($users);
        
    }
}
