<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_row_id')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('user_id')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_qty')->nullable();
            $table->string('product_total_price')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
