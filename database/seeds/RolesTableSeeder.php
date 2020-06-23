<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'manager',
        ]);

        Role::create([
            'name' => 'user',
        ]);
    }
}
