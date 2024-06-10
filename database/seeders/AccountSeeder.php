<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $accounts = [
            [
                'id' => '1',
                'email' => 'bfp.health.nhq@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '2',
                'email' => 'bfp.health.r1@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '3',
                'email' => 'bfp.health.r2@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '4',
                'email' => 'bfp.health.r3@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '5',
                'email' => 'bfp.health.r4a@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '6',
                'email' => 'bfp.health.r4b@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '7',
                'email' => 'bfp.health.r5@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '8',
                'email' => 'bfp.health.r6@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '9',
                'email' => 'bfp.health.r7@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '10',
                'email' => 'bfp.health.r8@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '11',
                'email' => 'bfp.health.r9@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '12',
                'email' => 'bfp.health.r10@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '13',
                'email' => 'bfp.health.r11@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '14',
                'email' => 'bfp.health.r12@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '15',
                'email' => 'bfp.health.barmm@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '16',
                'email' => 'bfp.health.car@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            [
                'id' => '17',
                'email' => 'bfp.health.caraga@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '18',
                'email' => 'bfp.health.ncr@gmail.com',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],
            ];
        DB::table('accounts')->insert($accounts);
    }
}
