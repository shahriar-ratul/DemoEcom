<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('product_row_id')->nullable();
            $table->string('product_image')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_qty')->nullable();
            $table->string('product_total_price')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('temp_orders');
    }
}
