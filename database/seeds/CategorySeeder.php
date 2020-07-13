<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Men',
            'slug' => Str::slug('Men'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Women',
            'slug' => Str::slug('Women'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Kids',
            'slug' => Str::slug('Kids'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Category::create([
            'name' => 'Electronic',
            'slug' => Str::slug('Electronic'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Food',
            'slug' => Str::slug('Food'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Phone',
            'slug' => Str::slug('Phone'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Computer',
            'slug' => Str::slug('Computer'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Hardware',
            'slug' => Str::slug('Hardware'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Cars',
            'slug' => Str::slug('cars'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Category::create([
            'name' => 'Other',
            'slug' => Str::slug('Other'),
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
