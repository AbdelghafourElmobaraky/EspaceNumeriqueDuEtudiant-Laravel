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
        Schema::create('emploi_du_temps', function (Blueprint $table) {
            $table->id();
            $table->string('diplome_id');
            $table->string('filiere_id');
            $table->string('lien');
            $table->timestamps();
        
            $table->foreign('diplome_id')
                ->references('id_diplome')
                ->on('diplomes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        
            $table->foreign('filiere_id')
                ->references('id_filiere')
                ->on('filieres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_du_temps');
    }
};
