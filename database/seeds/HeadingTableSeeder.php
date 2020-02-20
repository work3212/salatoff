<?php

use Illuminate\Database\Seeder;

class HeadingTableSeeder extends Seeder
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
                'name' => 'Кафе',
                'slug' => 'cafe'
            ],
            1 => [
                'name' => 'Магазин',
                'slug' => 'shop'
            ],
        ];

        DB::table('headings')->insert($name);
    }
}
