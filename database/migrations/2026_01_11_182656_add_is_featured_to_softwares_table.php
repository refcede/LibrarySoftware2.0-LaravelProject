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
        // Kolom boolean, default-nya 0 (Tidak Featured)
        $table->boolean('is_featured')->default(false)->after('category');
    });
}

public function down(): void
{
    Schema::table('software', function (Blueprint $table) {
        $table->dropColumn('is_featured');
    });
}
};
