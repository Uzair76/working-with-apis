<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'uzair',
                'email' => 'uzair@gmail.com',
                'password' => Hash::make('12345678') // Encrypt password
            ],
            [
                'name' => 'uzair',
                'email' => 'uzair1@gmail.com',
                'password' => Hash::make('12345678') // Encrypt password
            ],
            [
                'name' => 'uzair',
                'email' => 'uzair2@gmail.com',
                'password' => Hash::make('12345678') // Encrypt password
            ],
        ]);

        $users->each(function($user) {
            User::insert($user);
        });
    }
}
