<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'unique_id'         => uniqueKey(),    
            'name'              => 'user',
            'username'          => 'user',
            'email'             => 'user@eg.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password'          => Hash::make('user123!@#'),
            'wallet'            => 'fsdfndsfo232n',
            'spender'           => 'fdsf343nfdson'
        ]);
    }
}
