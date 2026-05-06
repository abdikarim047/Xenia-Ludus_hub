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
Schema::create('berichten', function (Blueprint $table) {
    $table->id();
    $table->text('tekst');
    $table->foreignId('publisher_id')->constrained()->cascadeOnDelete();
    $table->dateTime('datum');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berichten');
    }
};
