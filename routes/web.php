<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Front'], function () {
    /**
     * Вывод данных по рецептам
     */
    Route::get('/recipes', 'Recipes\RecipesCategoryController@showCategory');
    Route::get('/recipes/{category}', 'Recipes\RecipesCategoryController@searchCategory');
    Route::get('/recipes/{category}/{recipe}', 'RecipesController@showRecipe');

    /**
     * Вывод данных по блогу
     */
    Route::get('/blog', 'Blog\BlogController@showNews');
    Route::get('/blog/{slug}', 'Blog\BlogController@searchNews');
});




