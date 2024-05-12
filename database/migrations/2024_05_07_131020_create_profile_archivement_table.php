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
        Schema::create('profile_archivement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_profile');
            $table->unsignedBigInteger('id_archivement');
            $table->timestamps();

            $table->foreign('id_profile')->references('id')->on('profile');
            $table->foreign('id_archivement')->references('id')->on('archivements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_logro');
    }
};
