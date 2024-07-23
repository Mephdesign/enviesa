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
        Schema::create('cms_produkty', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->string('slug');
            $table->decimal('cena');
            $table->text('kategorie');
            $table->text('opis');
            $table->integer('status');
            $table->string('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_produkty');
    }
};
