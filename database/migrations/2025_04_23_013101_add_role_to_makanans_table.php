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
        Schema::table('makanans', function (Blueprint $table) {
            $table->enum('role', ['makanan', 'minuman'])->default('makanan')->after('harga');
        });
    }
    
    public function down(): void
    {
        Schema::table('makanans', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
    
};
