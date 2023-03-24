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
        Schema::create('shipments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('Id');
            $table->string('Postbedrijf');
            $table->foreign('Postbedrijf')
                ->references('Naam')->on('postservices')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->unsignedBigInteger('Pickup');
            $table->foreign('Pickup')
                ->references('Id')->on('pickups')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->unsignedBigInteger('Users');
            $table->foreign('Users')
                ->references('Id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action')
                ->nullable();
            $table->string('status');
            $table->foreign('Status')
                ->references('Naam')->on('status')
                ->onDelete('no action')
                ->onUpdate('no action');
            $table->string('Track&Trace', 255);
            $table->string('Labels');
            $table->foreign('Labels')
                ->references('Barcode')->on('labels')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
