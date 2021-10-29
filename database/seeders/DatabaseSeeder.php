<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Stock;
use Illuminate\Support\Str;
use Faker\Provider\ar_JO\Text;
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
        User::factory(10)->create();


     /*   for($i = 0; $i < 50; $i++)
        {
            Stock::create([

                'stockName' => Str::random(10),
                'stockPrice' => rand(10, 500),
                'stockYear' => rand(1998, 2010)

            ]);
        }*/
    }
}
