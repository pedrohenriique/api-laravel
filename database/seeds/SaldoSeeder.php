<?php

use App\Models\Saldo;
use Illuminate\Database\Seeder;

class SaldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Saldo::create([
            'user_id' => 1,
            'saldo' => 10000.00,
        ]);
        Saldo::create([
            'user_id' => 2,
            'saldo' => 5000.00,
        ]);
    }
}
