<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'name' => 'VEF',
            'symbol' => 'Bs',
            'exchange_rate' => 1,
        ]);
        Currency::create([
            'name' => 'USD',
            'symbol' => '$',
            'exchange_rate' => 60,
        ]);
        Currency::create([
            'name' => 'EUR',
            'symbol' => 'E',
            'exchange_rate' => 70,
        ]);
    }
}
