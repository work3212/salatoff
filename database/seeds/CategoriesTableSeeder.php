<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            0 => [
                'name' => 'Традиционные салаты',
                'slug' => 'traditsionnye-salaty',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Традиционные салаты',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            1 => [
                'name' => 'Фасованные',
                'slug' => 'fasovannye',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            2 => [
                'name' => 'Весовые',
                'slug' => 'vesovye',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            3 => [
                'name' => 'Корейские салаты',
                'slug' => 'koreyskie-salaty',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            4 => [
                'name' => 'Фасованные',
                'slug' => 'fasovannye',
                'heading' => 1,
                'parent' => 3,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            5 => [
                'name' => 'Весовые',
                'slug' => 'vesovye',
                'heading' => 1,
                'parent' => 3,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            6 => [
                'name' => 'Готовая кулинария',
                'slug' => 'gotovaya-kulinariya',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            7 => [
                'name' => 'Фасованная',
                'slug' => 'fasovannye',
                'heading' => 1,
                'parent' => 6,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            8 => [
                'name' => 'Весовая',
                'slug' => 'vesovye',
                'heading' => 1,
                'parent' => 6,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            9 => [
                'name' => 'Блины',
                'slug' => 'bliny',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            10 => [
                'name' => 'Фасованные',
                'slug' => 'fasovannye',
                'heading' => 1,
                'parent' => 9,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            11 => [
                'name' => 'Весовые',
                'slug' => 'vesovye',
                'heading' => 1,
                'parent' => 9,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            12 => [
                'name' => 'Бутерброды и сэндвичи',
                'slug' => 'buterbrody-i-sendvichi',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            13 => [
                'name' => 'Выпечка',
                'slug' => 'vypechka',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            14 => [
                'name' => 'Кондитерские изделия',
                'slug' => 'konditerskie-izdeliya',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            15 => [
                'name' => 'Роллы',
                'slug' => 'rolly',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            16 => [
                'name' => 'Напитки',
                'slug' => 'napitki',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            17 => [
                'name' => 'Супы',
                'slug' => 'supy',
                'heading' => 1,
                'parent' => 0,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            18 => [
                'name' => 'Фасованные',
                'slug' => 'fasovannye',
                'heading' => 1,
                'parent' => 17,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],
            19 => [
                'name' => 'Весовые',
                'slug' => 'vesovye',
                'heading' => 1,
                'parent' => 17,
                'image' => 'category.jpeg',
                'seo_title' => 'Название категории',
                'seo_description' => 'Описание категории',
                'seo_keywords' => 'Ключи'
            ],

        ];

        DB::table('categories')->insert($data);
    }
}
