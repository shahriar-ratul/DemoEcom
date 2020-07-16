<?php

use App\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => '1.jpg',
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Banner::create([
            'image' => '2.jpg',
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Banner::create([
            'image' => '3.jpg',
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Banner::create([
            'image' => '4.jpg',
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
