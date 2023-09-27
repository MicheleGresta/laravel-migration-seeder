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
        Schema::table('trains', function (Blueprint $table) {
            $table->dateTime("data_di_partenza")->after ("stazione_di_partenza"); 
            $table->dateTime("data_di_arrivo")->after ("stazione_di_arrivo"); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("data_di_partenza");
            $table->dropColumn("data_di_arrivo");
        });
    }
};
