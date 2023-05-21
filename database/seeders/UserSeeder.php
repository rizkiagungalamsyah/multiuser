<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData = [
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Kasir',
                'email' => 'kasir@test.com',
                'role' => 'kasir',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Pengguna',
                'email' => 'pengguna@test.com',
                'role' => 'pengguna',
                'password' => Hash::make('password')
            ]
        ];

        foreach ($usersData as $key => $value) {
            User::create($value);
        }
    }
}
