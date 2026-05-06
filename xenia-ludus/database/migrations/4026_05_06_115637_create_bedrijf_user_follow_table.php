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
Schema::create('bedrijf_user_follow', function (Blueprint $table) {
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->foreignId('bedrijf_id')->constrained('bedrijven')->cascadeOnDelete();
    $table->primary(['user_id', 'bedrijf_id']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bedrijf_user_follow');
    }
};
