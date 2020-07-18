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
            'username' => 'ratul',
            'designation' => 'SuperAdmin',
            'email' => 'ratul794@gmail.com',
            'password' => Hash::make('525100'),
        ]);

    }
}
