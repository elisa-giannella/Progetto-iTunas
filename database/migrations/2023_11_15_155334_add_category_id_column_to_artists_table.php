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
        Schema::table('artists', function (Blueprint $table) {
            // creo la colonna
            $table->unsignedBigInteger('category_id');

            // la collego alla tabella esterna
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artists', function (Blueprint $table) {
            // prima tolgo il collegamento
            $table->dropForeign(['category_id']);

            // poi tolgo la colonna
            $table->dropColumn('category_id');
        });
    }
};
