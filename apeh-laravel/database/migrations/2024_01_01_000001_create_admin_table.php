<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password_hash');
            $table->timestamps();
        });

        // Crée un admin par défaut — CHANGER LE MOT DE PASSE EN PRODUCTION
        DB::table('admin')->insert([
            'username'      => 'admin',
            'password_hash' => Hash::make('ChangeMe2024!'),
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
