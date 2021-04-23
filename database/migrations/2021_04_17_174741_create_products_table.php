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
            $table->string('product_code');
            $table->string('name');
            $table->string('image');
            $table->mediumText('details')->nullable();
            $table->string('buying_price');
            $table->string('selling_price');
            $table->integer('stock');
            $table->bigInteger('category_id')->unsigned()->index();

            $table->foreign('category_id')
                            ->references('id')
                            ->on('categories')
                            ->onDelete('cascade');

            $table->bigInteger('supplier_id')->unsigned()->index();                
            $table->foreign('supplier_id')
                            ->references('id')
                            ->on('suppliers')
                            ->onDelete('cascade');
            $table->string('buying_date');
            

            $table->bigInteger('sort_order')->nullable();
            $table->boolean('status')->nullable();
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
