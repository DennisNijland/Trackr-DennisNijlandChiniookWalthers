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
        Schema::create('reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('Id');
            $table->foreign('Id')
                ->references('Id')->on('shipments')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string('Tekst', 255);
            $table->integer('Score', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
