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


Route::get('/recipes', 'Front\Recipes\RecipesCategoryController@showCategory');
Route::get('/recipes/{category}', 'Front\Recipes\RecipesCategoryController@searchCategory');
Route::get('/recipes/{category}/{recipe}', 'Front\Recipes\RecipesController@showRecipe');
