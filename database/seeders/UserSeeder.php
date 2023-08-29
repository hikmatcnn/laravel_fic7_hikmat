<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        User::create([
            'name' => 'Saiful Bahri',
            'email' => 'bahri@gmail.com',
            'phone' => '6285724386495',
            'bio' => 'flutter Dev',
            'role' => 'superadmin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
        ]);
        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'phone' => '62857243333333',
            'bio' => 'flutter Developer',
            'role' => 'superadmin',
            'email_verified_at'  => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
