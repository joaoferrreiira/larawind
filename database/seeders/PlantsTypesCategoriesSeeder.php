<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantsTypesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants_types_categories')->insert([
            ['name' => 'Tipo'],
            ['name' => 'Folha'],
            ['name' => 'Flor'],
            ['name' => 'Fruto'],
            ['name' => 'Habitat'],
        ]);
    }
}
