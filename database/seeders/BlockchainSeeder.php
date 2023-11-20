<?php

namespace Database\Seeders;

use App\Models\Blockchain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlockchainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blockchain::create([
            'name' => 'Bitcoin',
            'coin' => 'BTC'
        ]);


        Blockchain::create([
            'name' => 'Litecoin',
            'coin' => 'LTC'
        ]);

        Blockchain::create([
            'name' => 'Ethereum',
            'coin' => 'ETH'
        ]);

        Blockchain::create([
            'name' => 'Ethereum Classic',
            'coin' => 'ETC'
        ]);

        Blockchain::create([
            'name' => 'Bitcoin Cash',
            'coin' => 'BCH'
        ]);

        Blockchain::create([
            'name' => 'TRON',
            'coin' => 'TRX'
        ]);

        Blockchain::create([
            'name' => 'Algorand',
            'coin' => 'ALGO'
        ]);

        Blockchain::create([
            'name' => 'Polkadot',
            'coin' => 'DOT'
        ]);

        Blockchain::create([
            'name' => 'Avalanche',
            'coin' => 'AVAX'
        ]);

        Blockchain::create([
            'name' => 'Stellar',
            'coin' => 'XLM'
        ]);

        Blockchain::create([
            'name' => 'Ripple',
            'coin' => 'XRP'
        ]);

        Blockchain::create([
            'name' => 'Polygon',
            'coin' => 'MATIC'
        ]);
    }
}
