<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name',255)->nullable();
            $table->string('category_image',255)->nullable();
            $table->string('category_short_description',500)->nullable();
            $table->string('category_long_description',2000)->nullable();
            $table->string('parent_id',100)->nullable();
            $table->string('has_child',100)->nullable();
            $table->string('is_featured',200)->nullable();
            $table->string('level',100)->nullable();
            $table->string('count_product',10000)->nullable();
            $table->string('category_sort_order',1000)->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
