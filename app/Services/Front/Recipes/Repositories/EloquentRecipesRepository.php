<?php


namespace App\Services\Front\Recipes\Repositories;

use App\Models\RecipesCategory;

class EloquentRecipesRepository
{
    public function CategoryAll()
    {
        $colums = ['id', 'name', 'slug', 'seo_title', 'seo_description', 'seo_keywords'];
        $result = RecipesCategory::orderBy('id', 'DESC')
            ->select($colums)
            ->paginate(config('front_paginate.recipes_category'));
        return $result;
    }
}
