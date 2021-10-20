<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersHasChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_challenges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('challenges_id')
                ->constrained('challenges')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->integer('state');
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
        Schema::dropIfExists('users_has_challenges');
    }
}
