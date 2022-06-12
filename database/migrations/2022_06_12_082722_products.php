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
            $table->text('image')->nullable($value = true);
            $table->text('imagehover')->nullable($value = true);
            $table->text('gallery')->nullable($value = true);
            $table->string('name');
            $table->double('price' 8, 2);
            $table->enum('category',['Bag','Gadget','Trophy','Towel','Packaging']);
            $table->string('sku')->unique();
            $table->enum('tags',['Best Buy','Interim'])->nullable($value = true);
            $table->text('description')->nullable($value = true);
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
        Schema::dropIfExists('product');
    }
}
