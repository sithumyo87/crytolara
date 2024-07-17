<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::create([
            'name'              => 'Admin',
            'username'          => 'admin',
            'email'             => 'admin@crypto.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password'          => '@cry123',
        ]);
    }
}
