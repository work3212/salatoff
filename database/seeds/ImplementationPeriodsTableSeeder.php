<?php

use Illuminate\Database\Seeder;

class ImplementationPeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            0 =>[
                'name' => '72 часа'
            ],
            1 => [
                'name' => '12 часов'
            ],
            2 => [
                'name' => '1 час'
            ]

        ];
        DB::table('implementation_periods')->insert($name);
    }
}
