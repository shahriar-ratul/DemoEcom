<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'username' => 'SuperAdmin',
            'designation' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('525100'),
        ]);
        User::create([
            'role_id' => 1,
            'username' => 'ratul',
            'designation' => 'SuperAdmin',
            'email' => 'ratul794@gmail.com',
            'password' => Hash::make('525100'),
        ]);
        User::create([
            'role_id' => 2,
            'username' => 'admin',
            'designation' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('525100'),
        ]);
        User::create([
            'role_id' => 3,
            'username' => 'Manager',
            'designation' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('525100'),
        ]);

        User::create([
            'role_id' => 4,
            'username' => 'User',
            'designation' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('525100'),
        ]);

    }
}
