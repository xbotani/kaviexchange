<?php

namespace Database\Seeders;

use App\Models\CurrencyKoya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencyKoyaSeeder extends Seeder
{

    public function run(): void
    {

        CurrencyKoya::create([
            'name' => 'دۆلار',
            'code' => 'us',
            'currency_code' => 'USD',
            'order' => 1,
            'sale' => 140000,
            'buy' => 141000,
        ]);

        CurrencyKoya::create([
            'name' => 'یۆرۆ',
            'code' => 'eu',
            'currency_code' => 'EUR',
            'order' => 2,
            'sale' => 115.75,
            'buy' => 114.25,
        ]);

        CurrencyKoya::create([
            'name' => 'پاوەند',
            'code' => 'gb',
            'currency_code' => 'GBP',
            'order' => 3,
            'sale' => 133,
            'buy' => 130.5,
        ]);

        CurrencyKoya::create([
            'name' => 'کرۆنی سویدی',
            'code' => 'se',
            'currency_code' => 'SEK',
            'order' => 4,
            'sale' => 88.5,
            'buy' => 85.5,
        ]);

        CurrencyKoya::create([
            'name' => 'کرۆنی نەرویجی',
            'code' => 'no',
            'currency_code' => 'NOK',
            'order' => 5,
            'sale' => 86,
            'buy' => 78,
        ]);

        CurrencyKoya::create([
            'name' => 'کرۆنی دانیمارکی',
            'code' => 'dk',
            'currency_code' => 'DKK',
            'order' => 6,
            'sale' => 140,
            'buy' => 127,
        ]);

        CurrencyKoya::create([
            'name' => 'ئوسترالی',
            'code' => 'au',
            'currency_code' => 'AUD',
            'order' => 7,
            'sale' => 64,
            'buy' => 61.5,
        ]);

        CurrencyKoya::create([
            'name' => 'فرانکی سویسری',
            'code' => 'ch',
            'currency_code' => 'CHF',
            'order' => 8,
            'sale' => 124,
            'buy' => 121,
        ]);

        CurrencyKoya::create([
            'name' => 'کەنەدی',
            'code' => 'ca',
            'currency_code' => 'CAD',
            'order' => 9,
            'sale' => 72,
            'buy' => 68,
        ]);

        CurrencyKoya::create([
            'name' => 'لیرەی تورکی',
            'code' => 'tr',
            'currency_code' => 'TRY',
            'order' => 10,
            'sale' => 3850,
            'buy' => 4150,
        ]);

        CurrencyKoya::create([
            'name' => 'تـومـەن',
            'code' => 'ir',
            'currency_code' => 'IRR',
            'order' => 11,
            'sale' => 7100000,
            'buy' => 9000000,
        ]);

        CurrencyKoya::create([
            'name' => 'درهەمی ئیماراتی',
            'code' => 'ae',
            'currency_code' => 'AED',
            'order' => 12,
            'sale' => 365,
            'buy' => 376,
        ]);

        CurrencyKoya::create([
            'name' => 'ڕیاڵی سعودی',
            'code' => 'sa',
            'currency_code' => 'SAR',
            'order' => 13,
            'sale' => 370,
            'buy' => 384,
        ]);

        CurrencyKoya::create([
            'name' => 'دیناری ئوردونی',
            'code' => 'jo',
            'currency_code' => 'JOD',
            'order' => 14,
            'sale' => 67,
            'buy' => 73,
        ]);
    }
}
