<?php


namespace App\Services\Front\Recipes\Repositories;


use App\Models\Recipe;

class EloquentRecipesRepository
{
    public function allProducts($category)
    {
        $colums = ['id', 'name', 'slug', 'category_id'];
        $result = Recipe::where('category_id', $category->id)
            ->orderBy('id', 'DESC')
            ->paginate(5);
        return $result;
    }

    public function findProduct($recipe)
    {
        $colums = ['id', 'name', 'slug', 'description', 'seo_title', 'seo_description', 'seo_keywords'];
        $result = Recipe::where('slug', $recipe)
            ->select($colums)
            ->firstOrFail();
        return $result;
    }
}
