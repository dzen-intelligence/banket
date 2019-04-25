<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTestAccount();

        // Фабрики
        factory(App\User::class, 50)->create();
    }

    private function createTestAccount() {
        DB::table('users')->insert([
            'name'  => 'Development account',
            'phone' => '11111111111',
            'password' => Hash::make('111111'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at'=> now()
        ]);
    }
}
