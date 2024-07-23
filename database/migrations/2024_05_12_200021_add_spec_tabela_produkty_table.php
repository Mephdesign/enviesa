<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecTabelaProduktyTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cms_produkty', function (Blueprint $table) {
            $table->string('specyfikacja')->nullable()->after('opis');
            $table->string('tabela_rozmiarow')->nullable()->after('specyfikacja');
        });
    }

    public function down()
    {
        Schema::table('cms_produkty', function (Blueprint $table) {
            $table->dropColumn('specyfikacja');
            $table->dropColumn('tabela_rozmiarow');
        });
    }
}



