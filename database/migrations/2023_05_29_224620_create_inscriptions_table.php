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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('nom_ar');
            $table->string('prenom_ar');
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('adresse');
            $table->string('code_pays');
            $table->bigInteger('telephone');
            $table->string('email');
            $table->string('id_diplome');
            $table->string('id_filiere');
            $table->string('semestre');
            $table->foreign('cne')->references('code_massar')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
