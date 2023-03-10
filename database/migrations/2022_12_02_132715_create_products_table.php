<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->float('price');
            $table->integer('discount_price')->nullable();
            $table->integer('quantity');
            $table->integer('minquantity')->default(1);
            $table->text('detail');
            $table->string('slug');
            $table->tinyInteger('status')->nullable()->default('0');
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
};
