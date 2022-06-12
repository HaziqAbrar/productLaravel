<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->text('image')->nullable($value = true);
            $table->text('imagehover')->nullable($value = true);
            $table->string('name');
            $table->string('price');
            $table->enum('category',['Bag','Gadget','Trophy','Towel','Packaging']);
            $table->string('sku')->unique();
            $table->string('tags')->nullable($value = true);
            $table->text('description')->nullable($value = true);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('products');

    }
}
