<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('email', 255)->unique();
            $table->string('telephone', 30);
            $table->string('adresse', 255);
            $table->string('contact_nom', 100);
            $table->string('contact_phone', 30);
            $table->string('domaine', 150);
            $table->string('statut', 100);
            $table->boolean('rgpd_consent')->default(false);
            $table->timestamp('date_inscription')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
