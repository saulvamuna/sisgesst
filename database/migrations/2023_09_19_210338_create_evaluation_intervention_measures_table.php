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
        Schema::create('evaluation_intervention_measures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_evaluation');
            $table->unsignedBigInteger('id_intervention_measure');
            $table->string('suggestion');
            $table->timestamps();

            $table->foreign('id_evaluation')->references('id')->on('evaluations');
            $table->foreign('id_intervention_measure')->references('id')->on('intervention_measures');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_intervention_measures');
    }
};
