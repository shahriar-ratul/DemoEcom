<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id',11)->nullable();
            $table->string('subcategory_id',11)->nullable();
            $table->string('manufacturer_id',11)->nullable();
            $table->string('product_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_qty')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_height')->nullable();
            $table->string('product_width')->nullable();
            $table->string('product_weight')->nullable();
            $table->string('product_sku',300)->nullable();
            $table->string('product_video_link')->nullable();
            $table->string('product_status')->nullable();
            $table->string('product_image')->default('default.jpg');
            $table->string('product_image_1')->default('default.jpg');
            $table->string('product_image_2')->default('default.jpg');
            $table->string('product_image_3')->default('default.jpg');
            $table->string('product_image_4')->default('default.jpg');
            $table->string('product_image_5')->default('default.jpg');
            $table->string('product_image_6')->default('default.jpg');
            $table->string('product_image_7')->default('default.jpg');
            $table->string('product_image_8')->default('default.jpg');
            $table->string('product_image_9')->default('default.jpg');
            $table->string('product_image_10')->default('default.jpg');
            $table->string('is_featured',2)->nullable();
            $table->string('is_latest',2)->nullable();
            $table->text('product_short_description')->nullable();
            $table->text('product_long_description')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
