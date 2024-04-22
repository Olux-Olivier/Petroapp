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
        //
        Schema::create('cmdfournisseurs', function (Blueprint $table) {
            $table->id();
            $table->integer('qte');
            $table->string('email');
            $table->foreignId('fournisseur_id')->constrained()->cascadeOnDelete();
            $table->foreignId('gerand_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cmdfournisseurs');
    }
};