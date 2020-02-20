<?php

use Illuminate\Database\Seeder;

class RecipeCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\RecipesCategory::class, 10)->create();
    }
}
