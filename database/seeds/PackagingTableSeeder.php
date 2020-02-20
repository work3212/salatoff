<?php

use Illuminate\Database\Seeder;

class PackagingTableSeeder extends Seeder
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
                'name' => 'Контейнер 1500 мл'
            ],
            1 => [
                'name' => 'Контейнер 300 мл'
            ],
            2 => [
                'name' => 'Контейнер 1000 мл'
            ]

        ];
        DB::table('packagings')->insert($name);
    }
}
