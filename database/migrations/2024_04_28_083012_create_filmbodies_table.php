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
        Schema::create('filmbodies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id')->index();
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->unsignedBigInteger('genre_id')->index();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->unsignedBigInteger('director_id')->index();
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            $table->unsignedBigInteger('actor_id')->index();
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmbodies');
    }
};
