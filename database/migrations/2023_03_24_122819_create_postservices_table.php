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
        Schema::create('postservices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('Naam', 45)->primary();
            $table->double('Verzendkosten', 10,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postservices');
    }
};
