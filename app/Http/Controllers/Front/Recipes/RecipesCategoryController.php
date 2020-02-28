<?php

namespace App\Http\Controllers\Front\Recipes;

use App\Http\Controllers\Front\FrontController;
use App\Services\Front\Recipes\RecipesService;
use Illuminate\Http\Request;

class RecipesCategoryController extends FrontController
{
    private $recipesService;

    public function __construct(RecipesService $recipesService)
    {
        $this->recipesService = $recipesService;
    }

    public function showCategory()
    {
        $category_list = $this->recipesService->getListCategory();
        dd($category_list);
    }

    public function searchCategory($category)
    {
        $category = $this->recipesService->getShowCategory($category);
        $recipes = $this->recipesService->getListProducts($category);
        dd($category,$recipes);
    }
}
