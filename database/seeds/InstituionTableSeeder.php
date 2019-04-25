<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstituionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertInstituions();
    }

    private function insertInstituions()
    {
        DB::table('instituions')->insert([
            'restaurateur_id' => 1
        ]);

        DB::table('instituions')->insert([
            'restaurateur_id' => 2
        ]);

        DB::table('instituions')->insert([
            'restaurateur_id' => 3
        ]);

        DB::table('instituions')->insert([
            'restaurateur_id' => 4
        ]);

        DB::table('additions')->insert([
            'name' => 'Водка'
        ]);

        DB::table('additions')->insert([
            'name' => 'Музыка'
        ]);

        DB::table('additions')->insert([
            'name' => 'Караоке'
        ]);

        DB::table('additions')->insert([
            'name' => 'Парковка'
        ]);

        DB::table('additions')->insert([
            'name' => 'Диджей'
        ]);

        DB::table('additions')->insert([
            'name' => 'Тамада'
        ]);

        DB::table('additions')->insert([
            'name' => 'Баянист'
        ]);

        DB::table('additions')->insert([
            'name' => 'Сауна'
        ]);

    }
}
