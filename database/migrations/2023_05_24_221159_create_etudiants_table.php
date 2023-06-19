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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->string('cin');
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('situation_familiale');
            $table->string('sexe');
            $table->string('code_pays');
            $table->string('adresse');
            $table->bigInteger('code_postal');
            $table->bigInteger('telephone');
            $table->string('email');
            $table->string('diplome');
            $table->string('filiere');
            $table->boolean('inscre')->nullable();
            $table->primary('cne');
            $table->foreign('diplome')->references('id_diplome')->on('diplomes');
            $table->foreign('filiere')->references('id_filiere')->on('filieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
