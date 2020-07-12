<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->date('invoice_date');
            $table->string('order_receiver_name');
            $table->string('order_receiver_address',500);
            $table->string('order_total_before_tax');
            $table->string('order_total_tax1')->nullable();
            $table->string('order_total_tax2')->nullable();
            $table->string('order_total_tax3')->nullable();
            $table->string('order_total_tax')->nullable();
            $table->string('order_total_after_tax')->nullable();
            $table->string('order_by')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
