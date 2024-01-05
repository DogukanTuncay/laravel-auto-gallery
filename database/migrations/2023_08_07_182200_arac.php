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
        Schema::create('arac', function (Blueprint $table) {
            $table->id();
            $table->string('marka');
            $table->string('model');
            $table->integer('yil');
            $table->string('yakitTuru');
            $table->string('vitesTuru');
            $table->integer('motorHacmi');
            $table->integer('motorGucu');
            $table->integer('kilometre');
            $table->decimal('fiyat', 10, 2);
            $table->text('aciklama')->nullable();
            $table->boolean('satildiMi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arac');
    }
};
