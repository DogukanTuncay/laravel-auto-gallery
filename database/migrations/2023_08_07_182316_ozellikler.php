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
        Schema::create('ozellikler', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arac_id');
            $table->string('renk');
            $table->string('govdeTipi');
            $table->integer('kapiSayisi');
            $table->integer('koltukSayisi');
            $table->string('yakitTuketimi');
            $table->string('cekisSistemi');
            // Diğer özellikler eklenebilir.
            $table->timestamps();
            // Arac tablosu ile ilişki için foreign key tanımlaması
            $table->foreign('arac_id')->references('id')->on('arac')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ozellikler');

    }
};
