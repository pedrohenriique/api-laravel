<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome' => 'Pedro Henrique',
            'agencia' => '01',
            'conta' => '1010',
            'password' => bcrypt('123456'),
            'ativo' => 1,
        ]);
        User::create([
            'nome' => 'Santos Abraão',
            'agencia' => '02',
            'conta' => '2020',
            'password' => bcrypt('123456'),
            'ativo' => 1,
        ]);
    }
}
