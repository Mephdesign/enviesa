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
        Schema::table('cms_strony', function (Blueprint $table) {
            $table->text('zajawka')->nullable()->after('slug');
        });
        Schema::table('cms_strony', function (Blueprint $table) {
            $table->text('content')->nullable()->after('zajawka');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cms_strony', function (Blueprint $table) {
            $table->dropColumn('zajawka');
        });
        Schema::table('cms_strony', function (Blueprint $table) {
            $table->dropColumn('content');
        });
    }
};
