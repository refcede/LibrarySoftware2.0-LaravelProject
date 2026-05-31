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
        // Pastikan nama tabel 'softwares' (JAMAK)
        Schema::table('software', function (Blueprint $table) {
            
            // Cek apakah kolom install_instructions sudah ada? 
            // Kalau belum, kita tidak bisa pakai 'after'.
            if (Schema::hasColumn('software', 'install_instructions')) {
                $table->string('file_size')->nullable()->after('install_instructions');
                $table->string('os_support')->nullable()->after('file_size');
            } else {
                // Jika kolom patokan tidak ada, taruh di paling belakang
                $table->string('file_size')->nullable();
                $table->string('os_support')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('software', function (Blueprint $table) {
            $table->dropColumn(['file_size', 'os_support']);
        });
    }
};