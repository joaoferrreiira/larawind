<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlantsTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants_types')->insert([
            ['plants_types_categories_id' => 1, 'name' => 'Árvore', 'icon' => 'icon'],
            ['plants_types_categories_id' => 1, 'name' => 'Arbusto', 'icon' => 'icon'],
            ['plants_types_categories_id' => 1, 'name' => 'Herbácea', 'icon' => 'icon'],

            ['plants_types_categories_id' => 2, 'name' => 'Lisa', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Lobada', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Dentada', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Longa', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Agulha', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Composta', 'icon' => 'icon'],
            ['plants_types_categories_id' => 2, 'name' => 'Palmeira', 'icon' => 'icon'],

            ['plants_types_categories_id' => 3, 'name' => '4 pétalas', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => '5 pétalas', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => '+5 pétalas', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => 'Composta', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => 'Assimétrica', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => 'Pendente', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => 'Estames', 'icon' => 'icon'],
            ['plants_types_categories_id' => 3, 'name' => 'Cones', 'icon' => 'icon'],

            ['plants_types_categories_id' => 4, 'name' => 'Suculento', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Citrino', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Baga', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Seco', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Sâmara', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Vagem', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Tropical', 'icon' => 'icon'],
            ['plants_types_categories_id' => 4, 'name' => 'Carnudo', 'icon' => 'icon'],

            ['plants_types_categories_id' => 5, 'name' => 'Floresta', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Linhas de água', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Jardim', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Prado', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Cultivo', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Montado', 'icon' => 'icon'],
            ['plants_types_categories_id' => 5, 'name' => 'Dunas', 'icon' => 'icon'],
        ]);
    }
}
