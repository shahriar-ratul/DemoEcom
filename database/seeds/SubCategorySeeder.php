<?php

use Illuminate\Database\Seeder;
use App\SubCategory;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*men categories*/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 1,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 1,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 1,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 1,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        /*women categories*/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 2,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 2,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 2,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 2,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /*kids Categories*/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 3,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 3,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 3,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 3,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /* */
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 4,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 4,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 4,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 4,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 5,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 5,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 5,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 5,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 6,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 6,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 6,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 6,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 7,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 7,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 7,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 7,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 8,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 8,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 8,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 8,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 9,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 9,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 9,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 9,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        /**/
        SubCategory::create([
            'name' => 'Cloths',
            'slug' => Str::slug('cloths'),
            'category_id' => 10,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        SubCategory::create([
            'name' => 'Pants',
            'slug' => Str::slug('pants'),
            'category_id' => 10,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'category_id' => 10,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        SubCategory::create([
            'name' => 'Shoes',
            'slug' => Str::slug('Shoes'),
            'category_id' => 10,
            'status'=> 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
