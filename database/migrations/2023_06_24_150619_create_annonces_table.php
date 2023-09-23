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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->float('prix');
            $table->string('telephone');
            $table->string('description');
            $table->string('photo_1')->nullable();
            $table->string('photo_2')->nullable();
            $table->string('photo_3')->nullable();
            $table->string('photo_4')->nullable();
            $table->string('photo_5')->nullable();
            $table->integer('etat')->default(0); // 0 en traitement 1 valider 2 non valider
            $table->UnsignedBigInteger('ville_id');
            $table->UnsignedBigInteger('categorie_id');
            $table->UnsignedBigInteger('user_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');   
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');   
            $table->foreign('user_id')->references('id')->on('users');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
