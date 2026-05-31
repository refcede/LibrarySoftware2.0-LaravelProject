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
        Schema::table('software', function (Blueprint $table) {
        // Kolom untuk Screenshot (URL Gambar Besar)
        $table->string('screenshot_url')->nullable()->after('image_url');
        // Kolom untuk Cara Install (Teks Panjang)
        $table->text('install_instructions')->nullable()->after('description');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('software', function (Blueprint $table) {
            //
        });
    }
};
