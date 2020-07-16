<?php

use Illuminate\Database\Seeder;
use App\Manufacturer;
use Illuminate\Support\Str;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
           'name' => 'GS Mart',
           'slug' => Str::slug('GS Mart'),
           'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Manufacturer::create([
            'name' => 'New Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'Dhaka Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'Sk Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'KK Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'Mirpur Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'Desi Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'HD Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'WS Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Manufacturer::create([
            'name' => 'GS Mart',
            'slug' => Str::slug('GS Mart'),
            'status' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
