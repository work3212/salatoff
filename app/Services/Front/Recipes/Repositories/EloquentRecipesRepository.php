<?php


namespace App\Services\Front\Recipes\Repositories;

use App\Models\RecipesCategory;

class EloquentRecipesRepository
{
    public function allCategory()
    {
        $colums = ['id', 'name', 'slug'];
        $result = RecipesCategory::orderBy('id', 'DESC')
            ->select($colums)
            ->paginate(config('front_paginate.recipes_category'));
        return $result;
    }

    public function findCategory($slug)
    {
        $colums = ['id', 'name', 'slug', 'seo_title', 'seo_description', 'seo_keywords'];
        $result = RecipesCategory::where('slug', $slug)
            ->select($colums)
            ->firstOrFail();
        return $result;
    }
}
