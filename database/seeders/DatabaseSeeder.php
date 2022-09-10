<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Draw;
use App\Models\DrawNumber;
use App\Models\Lottery;
use App\Models\NumberType;
use App\Models\Operator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Continent::factory(1)->create()->each(function($continent) {
            Country::factory(1)->create([
                'continent_id' => $continent->id
            ])->each(function($country) {
                Operator::factory(1)->create([
                    'country_id' => $country->id
                ])->each(function($operator) {
                    Lottery::factory(3)->create([
                        'operator_id' => $operator->id
                    ])->each(function($lottery) {
                        Draw::factory(12)->create([
                            'lottery_id' => $lottery->id
                        ])->each(function($draw) {
                            $numberTypes = NumberType::factory(2)->create();

                            DrawNumber::factory(5)->create([
                                'draw_id' => $draw->id,
                                'number_type_id' => $numberTypes->random(1)[0]->id
                            ]);
                        });
                    });
                });
            });
        });
    }
}
