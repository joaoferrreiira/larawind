<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHasPrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_prizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('prizes_id')
                ->constrained('prizes')
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
        Schema::dropIfExists('users_has_prizes');
    }
}
