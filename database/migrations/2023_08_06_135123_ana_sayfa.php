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
        Schema::create('ana_sayfa', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sirket_adi');
            $table->string('baslik');
            $table->string('alt_baslik');
            $table->string('contact_yazi');
            $table->string('contact_adres');
            $table->string('contact_iframe',1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ana_sayfa');
    }
};
