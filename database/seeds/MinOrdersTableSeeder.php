<?php

use Illuminate\Database\Seeder;

class MinOrdersTableSeeder extends Seeder
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
                'name' => '1 упаковка'
            ],
            1 => [
                'name' => '1 штука'
            ],
            2 => [
                'name' => '1 ящик'
            ]

        ];
        DB::table('min_orders')->insert($name);
    }
}
