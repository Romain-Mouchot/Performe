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
        Schema::create('entrainements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domaine_id')->nullable()->constrained('domaines')->onDelete('cascade');
            $table->string('title');
            $table->string('link');
            $table->string('difficulte')->nullable();
            $table->string('durée')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrainements');
    }
};
