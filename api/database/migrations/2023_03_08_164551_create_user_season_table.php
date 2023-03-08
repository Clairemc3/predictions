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
        Schema::create('user_season', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');

            $table->foreignId('season_id')
            ->constrained()
            ->onDelete('cascade');

            $table->boolean('complete')->default(false);
            $table->integer('percentage_complete')->default(0);
            $table->integer('points')->default(0);
            $table->integer('unfinalised_points')->default(0); // This will show the number of points IF the season were to finish now?

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_season');
    }
};
