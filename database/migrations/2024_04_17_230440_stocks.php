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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artilce_id')->constrained()->cascadeOnDelete();
            $table->integer('qte');
            $table->string('nalerte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('stocks');
    }
};
