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
                'email' => 'hdbuizon@up.edu.ph',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
            ],

            [
                'id' => '2',
                'email' => 'oysuba@up.edu.ph',
                'account_edited' => 0,
                'password' => '$2y$10$hOnYQ1UrdMcDPQtvEUHyQuvKXfKUwPvp.9Dycrc3E473phqkRUoE6',
                'updated_at' => date('2024-06-07 14:36:59'),
                'created_at' => date('2024-06-07 14:36:59'),
                ],
            ];
        DB::table('accounts')->insert($accounts);
    }
}
