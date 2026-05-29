<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->text('contenu');
            $table->string('image', 255)->nullable();
            $table->timestamp('date_publication')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
