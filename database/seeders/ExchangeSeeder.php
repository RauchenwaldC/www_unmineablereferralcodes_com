<?php

namespace Database\Seeders;

use App\Models\Exchange;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exchange::create([
            'name' => 'Binance',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Bitfinex',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Crypto.com Exchange',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Gate.io',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'KuCoin',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'LaToken',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'MEXC Global',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'NiceHash',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Bitforex',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Binance US',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Coinbase Exchange',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Hotbit',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Huobi',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Kraken',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'LBank',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'OKEx',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Uniswap (v2)',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'Uniswap (v3)',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'XT.COM',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'ZB',
            'url' => ''
        ]);

        Exchange::create([
            'name' => 'eToro',
            'url' => ''
        ]);
    }
}
