<?php

namespace App\Http\Controllers\Front\Recipes;

use App\Http\Controllers\Front\FrontController;
use App\Services\Front\Recipes\RecipesService;
use Illuminate\Http\Request;

class RecipesController extends FrontController
{
    private $recipesService;

    public function __construct(RecipesService $recipesService)
    {
        $this->recipesService = $recipesService;
    }

    public function showRecipe($category,$recipe)
    {
        $recipe = $this->recipesService->getShowProduct($recipe);
        dd($recipe);
    }
}
