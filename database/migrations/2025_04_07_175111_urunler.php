<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('kategoriler', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoryName');
            $table->timestamps();
        });


        Schema::create('urunler', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('categoryId');
            $table->string('productName');
            $table->string('productDescription');
            $table->integer('productPrice');
            $table->string('productImage');
            $table->timestamps();
            $table->foreign('categoryId')
                ->references('id')
                ->on('kategoriler')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
