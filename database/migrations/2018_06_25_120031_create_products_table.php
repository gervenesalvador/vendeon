<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->text('summary')->nullable();
            $table->text('description');
            $table->decimal('price', 10, 2)->default('0.00');
            $table->decimal('compared_at_price', 10, 2)->default('0.00');
            $table->integer('is_track_stock')->default(0);
            $table->integer('stock')->default(0);
            $table->string('sku')->nullable();
            $table->string('barcode')->nullable();
            $table->string('type')->nullable();
            $table->integer('collection_id')->default('0')->unsigned();
            $table->text('sef_url');
            $table->string('variants_1')->nullable();
            $table->string('variants_2')->nullable();
            $table->string('variants_3')->nullable();
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
