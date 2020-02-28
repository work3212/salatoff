<?php


namespace App\Services\Front\Recipes;


use App\Services\Front\Recipes\Repositories\EloquentRecipesCategoryRepository;
use App\Services\Front\Recipes\Repositories\EloquentRecipesRepository;

class RecipesService
{
    private $recipesCategoryRepository;
    private $recipesRepository;

    public function __construct(
        EloquentRecipesCategoryRepository $eloquentRecipesRepository,
        EloquentRecipesRepository $recipesRepository
    ) {
        $this->recipesCategoryRepository = $eloquentRecipesRepository;
        $this->recipesRepository = $recipesRepository;
    }

    public function getListCategory()
    {
        return $this->recipesCategoryRepository->allCategory();
    }

    public function getShowCategory($category)
    {
        return $this->recipesCategoryRepository->findCategory($category);
    }

    public function getListProducts($category)
    {
        return $this->recipesRepository->allProducts($category);
    }

    public function getShowProduct($recipe)
    {
        return $this->recipesRepository->findProduct($recipe);
    }
}
