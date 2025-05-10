<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // 1. Tambahkan kolom event_id (nullable supaya aman)
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('event_id')->nullable()->after('user_id');
        });

        // 2. Isi nilai default sementara jika data bookings lama sudah ada
        DB::table('bookings')->update(['event_id' => 4]); // Pastikan ID 1 ada di events

        // 3. Tambahkan foreign key constraint
        Schema::table('bookings', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['event_id']);
            $table->dropColumn('event_id');
        });
    }
};
