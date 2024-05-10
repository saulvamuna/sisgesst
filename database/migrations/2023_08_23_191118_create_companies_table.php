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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->char('nit',30)->unique(); #nit
            $table->char('name',60); #nombre
            $table->string('email', 100);#correo
            $table->integer('number_direct_workers')->default(0); #numero de trabajadores directos
            $table->integer('number_indirect_workers')->default(0); #numero de trabajadores indirectos
            $table->string('made_by', 100); #realizado por
            $table->string('position', 100); #cargo
            $table->bigInteger('city_id')->unsigned()->nullable(); #ciudad
            $table->string('economic_sector',100); #sector
            $table->boolean('is_active')->default(1);

            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onUpdate('SET NULL')
                    ->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
