<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('uid');
            $table->integer('is_shipping')->default('0');
            $table->string('shipping_method');
            $table->integer('shipping_method_price')->default('0');
            $table->integer('customer_id');
            $table->integer('is_payment')->default('0');
            $table->string('payment_method')->nullable();
            $table->string('billing_method')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('city')->nullable();
            $table->string('barangay')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('contact_number')->nullable();
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
