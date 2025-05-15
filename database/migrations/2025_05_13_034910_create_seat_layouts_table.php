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
       Schema::create('seat_layouts', function (Blueprint $table) {
    $table->id();
    $table->string('seat_id');
    $table->integer('x')->default(0);
    $table->integer('y')->default(0);
    $table->string('section')->default('outdoor'); // outdoor, first, second
    $table->unsignedBigInteger('event_id');
    $table->timestamps();

    $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_layouts');
    }
};
