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
            'restaurateur_id' => 1,
            'name' => 'Первое заведение',
            'state' => 'совеский',
            'city' => 'Казань',
            'lat' => '55.8203',
            'lon' => '49.1778',
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
