<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('scientific_name', 255);
            $table->longText('images');
            $table->string('legend', 255);
            $table->string('origin', 255);
            $table->string('foliage_duration', 255);
            $table->string('flowering_season', 255);
            $table->string('fruit_season', 255);
            $table->string('height', 255);
            $table->string('native_area', 255);
            $table->string('longevity', 255);
            $table->longText('history');
            $table->longText('characteristics');
            $table->longText('curiosities');
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
        Schema::dropIfExists('plants');
    }
}
