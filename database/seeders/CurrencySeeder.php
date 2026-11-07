<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{

    public function run(): void
    {

        Currency::create([
            'name' => 'دۆلار',
            'code' => 'us',
            'currency_code' => 'USD',
            'order' => 1,
            'sale' => 147450,
            'buy' => 146600,
        ]);

        Currency::create([
            'name' => 'یۆرۆ',
            'code' => 'eu',
            'currency_code' => 'EUR',
            'order' => 2,
            'sale' => 106.5,
            'buy' => 105.5,
        ]);

        Currency::create([
            'name' => 'پاوەند',
            'code' => 'gb',
            'currency_code' => 'GBP',
            'order' => 3,
            'sale' => 127,
            'buy' => 125.5,
        ]);

        Currency::create([
            'name' => 'کرۆنی سویدی',
            'code' => 'se',
            'currency_code' => 'SEK',
            'order' => 4,
            'sale' => 80,
            'buy' => 77,
        ]);

        Currency::create([
            'name' => 'کرۆنی نەرویجی',
            'code' => 'no',
            'currency_code' => 'NOK',
            'order' => 5,
            'sale' => 77,
            'buy' => 74,
        ]);

        Currency::create([
            'name' => 'کرۆنی دانیمارکی',
            'code' => 'dk',
            'currency_code' => 'DKK',
            'order' => 6,
            'sale' => 122.5,
            'buy' => 119,
        ]);

        Currency::create([
            'name' => 'ئوسترالی',
            'code' => 'au',
            'currency_code' => 'AUD',
            'order' => 7,
            'sale' => 61.5,
            'buy' => 60.25,
        ]);

        Currency::create([
            'name' => 'فرانکی سویسری',
            'code' => 'ch',
            'currency_code' => 'CHF',
            'order' => 8,
            'sale' => 111.5,
            'buy' => 110.25,
        ]);

        Currency::create([
            'name' => 'کەنەدی',
            'code' => 'ca',
            'currency_code' => 'CAD',
            'order' => 9,
            'sale' => 68.5,
            'buy' => 67,
        ]);

        Currency::create([
            'name' => 'لیرەی تورکی',
            'code' => 'tr',
            'currency_code' => 'TRY',
            'order' => 10,
            'sale' => 3750,
            'buy' => 4000,
        ]);

        Currency::create([
            'name' => 'تـومـەن',
            'code' => 'ir',
            'currency_code' => 'IRR',
            'order' => 11,
            'sale' => 9000000,
            'buy' => 9750000,
        ]);

        Currency::create([
            'name' => 'درهەمی ئیماراتی',
            'code' => 'ae',
            'currency_code' => 'AED',
            'order' => 12,
            'sale' => 368,
            'buy' => 375,
        ]);

        Currency::create([
            'name' => 'ڕیاڵی سعودی',
            'code' => 'sa',
            'currency_code' => 'SAR',
            'order' => 13,
            'sale' => 370,
            'buy' => 379,
        ]);

        Currency::create([
            'name' => 'دیناری ئوردونی',
            'code' => 'jo',
            'currency_code' => 'JOD',
            'order' => 14,
            'sale' => 69,
            'buy' => 72,
        ]);
    }
}
