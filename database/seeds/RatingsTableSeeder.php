<?php

use App\Rating;
use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rating::truncate();   //remove if role records exiest

        Rating::create(['average' => '5', 'employee_id' => '1']);
        Rating::create(['average' => '5', 'employee_id' => '2']);
        Rating::create(['average' => '5', 'employee_id' => '3']);
        Rating::create(['average' => '5', 'employee_id' => '4']);
        Rating::create(['average' => '5', 'employee_id' => '5']);
        Rating::create(['average' => '5', 'employee_id' => '6']);
    }
}
