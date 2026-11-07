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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('duration')->nullable();
            $table->timestamps();
        });

        // Pivot with artists
        Schema::create('artist_song', function (Blueprint $table) {
            $table->foreignId('artist_id')->constrained()->cascadeOnDelete();
            $table->foreignId('song_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_song');
        Schema::dropIfExists('songs');
    }
};
