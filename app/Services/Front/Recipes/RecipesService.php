<?php


namespace App\Services\Front\Recipes;


use App\Services\Front\Recipes\Repositories\EloquentRecipesRepository;

class RecipesService
{
    private $recipesRepository;

    public function __construct(EloquentRecipesRepository $eloquentRecipesRepository)
    {
        $this->recipesRepository = $eloquentRecipesRepository;
    }

    public function getListCategory()
    {
        return $this->recipesRepository->CategoryAll();
    }
}
