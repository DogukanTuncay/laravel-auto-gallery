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
        Schema::create('arac_mali_durum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('arac_id');
            $table->decimal('gelir', 10, 2)->default(0);
            $table->decimal('gider', 10, 2)->default(0);
            $table->decimal('kar_zarar', 10, 2)->default(0);
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
        Schema::dropIfExists('arac_mali_durum');
    }
};
