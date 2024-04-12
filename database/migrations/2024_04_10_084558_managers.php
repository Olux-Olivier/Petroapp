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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('email');
            $table->string('mdp');
            $table->timestamps();
        });

        Schema::table('gerants', function (Blueprint $table){
            $table->foreignIdFor(\App\Models\Manager::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('managers');

        Schema::create('gerants', function(Blueprint $table){
            $table->dropForeignIdFor(\App\Models\Manager::class);
        });
    }
};
