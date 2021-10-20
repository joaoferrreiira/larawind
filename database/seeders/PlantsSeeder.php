<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //COMO INSERIR TIPOS DAS PLANTAS, TIPOS DOS FRUTOS ...

        DB::table('plants')->insert([
            ['name' => 'Abeto-Branco', 'scientific_name' => 'Abies alba', 'images' => '', 'legend' => '', 'origin' => 'Introduzida', 'foliage_duration' => 'Persistente', 'flowering_season' => 'abr-mai', 'fruit_season' => 'set-out', 'height' => '50', 'native_area' => 'Montanhas do Centro e Sul da Europa', 'longevity' => '400-500', 'characteristics' => 'Árvore com copa cónica. Ritidoma liso castanho-acizentado, com ramos horizontais. Folhas aplanadas e flexíveis. Pinhas cilíndricas.', 'curiosities' => 'Na antiguidade era utilizado para a construção naval. A sua resina tem aplicações medicinais.'],
        ]);
    }
}
