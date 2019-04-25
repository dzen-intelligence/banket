<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Банкетный зал'
        ]);

        DB::table('types')->insert([
            'name' => 'Ресторан'
        ]);

        DB::table('types')->insert([
            'name' => 'Кафе'
        ]);

        DB::table('types')->insert([
            'name' => 'Быстро'
        ]);

        DB::table('types')->insert([
            'name' => 'Пиццерия'
        ]);

        DB::table('types')->insert([
            'name' => 'Суши бар'
        ]);

        DB::table('types')->insert([
            'name' => 'Караоке бар'
        ]);

        DB::table('types')->insert([
            'name' => 'Столовая'
        ]);

        DB::table('types')->insert([
            'name' => 'Кофе и чай'
        ]);

    }
}
