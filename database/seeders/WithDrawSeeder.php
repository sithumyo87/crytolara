<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Withdraw;

class WithDrawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Withdraw::create([
            'user_id'         => uniqueKey(),    
            'address'         => md5(uniqid(rand(), true)),
            'type'            => 1,
            'amount'          => 343435.23,
        ]);

        Withdraw::create([
            'user_id'         => uniqueKey(),    
            'address'         => md5(uniqid(rand(), true)),
            'type'            => 1,
            'amount'          => 55665,
        ]);

        Withdraw::create([
            'user_id'         => uniqueKey(),    
            'address'         => md5(uniqid(rand(), true)),
            'type'            => 0,
            'amount'          => 12343,
        ]);
    }
}
