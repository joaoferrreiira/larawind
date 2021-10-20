<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantsHasPlantsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants_has_plants_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plants_id')
                ->constrained('plants')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('plants_types_id')
                ->constrained('plants_types')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants_has_plants_types');
    }
}
