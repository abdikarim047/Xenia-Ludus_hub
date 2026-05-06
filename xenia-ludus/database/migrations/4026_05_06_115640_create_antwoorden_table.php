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
Schema::create('antwoorden', function (Blueprint $table) {
    $table->id();
    $table->text('inhoud');
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->foreignId('vraag_id')->constrained('vragen')->cascadeOnDelete();
    $table->dateTime('datum');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antwoorden');
    }
};
