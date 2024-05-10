<?php

use App\Models\Client;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');

            $table->foreign('id_client')
            ->references('id')
            ->on('clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('id_voiture');
            $table->foreign('id_voiture')
            ->references('id')
            ->on('voitures')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('depart');
            $table->string('arrive');
            $table->string('categorie');
            $table->dateTime('date_depart');
            $table->time('heure_depart');
            $table->string('place');
            $table->string('price_total');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
