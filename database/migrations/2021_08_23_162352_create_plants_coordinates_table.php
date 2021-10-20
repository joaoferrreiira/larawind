<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePlantsCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants_coordinates', function (Blueprint $table) {
            $table->id();
            $table->double('x');
            $table->double('y');
            $table->foreignId('plants_id')
                ->constrained('plants')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('users_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plants_coordinates');
    }
}
