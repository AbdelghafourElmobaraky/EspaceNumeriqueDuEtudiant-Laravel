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
        Schema::create('demandeattestations', function (Blueprint $table) {
            $table->id();
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('diplome');
            $table->string('Filiere');
            $table->string('annee');
            $table->string('semestre');
            $table->boolean('status')->default(0);
            $table->boolean('signee')->default(0);
            $table->boolean('terminer')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandeattestations');
    }
};
