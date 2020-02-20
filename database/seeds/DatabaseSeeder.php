<?php

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
        $this->call(MinOrdersTableSeeder::class);
        $this->call(ImplementationPeriodsTableSeeder::class);
        $this->call(PackagingTableSeeder::class);
        $this->call(HeadingTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(BlogTableSeeder::class);
        $this->call(RecipeCategoryTableSeeder::class);
        $this->call(RecipeTableSeeder::class);

    }
}
