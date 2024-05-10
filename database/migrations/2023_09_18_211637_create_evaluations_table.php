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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id');
            $table->string('danger_classification');
            $table->unsignedBigInteger('id_danger_description');
            $table->string('danger');
            $table->string('possible_effects');
            $table->string('source');
            $table->string('means');
            $table->string('individual');
            $table->unsignedBigInteger('id_deficiency_level');
            $table->unsignedBigInteger('id_exposure_level');
            $table->unsignedBigInteger('id_probability_level');
            $table->string('value_probability_level');
            $table->unsignedBigInteger('id_consequence_level');
            $table->unsignedBigInteger('id_intervention_risk_level');
            $table->string('risk_level_interpretation');
            $table->unsignedBigInteger('id_risk_acceptability');
            $table->string('linked');
            $table->string('contractors');
            $table->string('temporary');
            $table->string('exposure_time');
            $table->string('legal_requirement');
            $table->string('evaluator');
            $table->timestamps();

            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('id_danger_description')->references('id')->on('danger_descriptions');
            $table->foreign('id_deficiency_level')->references('id')->on('deficiency_levels');
            $table->foreign('id_exposure_level')->references('id')->on('exposure_levels');
            $table->foreign('id_probability_level')->references('id')->on('probability_levels');
            $table->foreign('id_consequence_level')->references('id')->on('consequence_levels');
            $table->foreign('id_intervention_risk_level')->references('id')->on('intervention_risk_levels');
            $table->foreign('id_risk_acceptability')->references('id')->on('risk_acceptabilities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
