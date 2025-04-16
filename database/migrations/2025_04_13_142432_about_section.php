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
        Schema::create('aboutsection', function(Blueprint $table) {
            $table->id();
            $table->string('about-title');
            $table->string('title1');
            $table->string('description1');
            $table->string('title2');
            $table->string('description2');
            $table->string('title3');
            $table->string('description3');
            $table->string('title4');
            $table->string('description4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutsection');
    }
};
