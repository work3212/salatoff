<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Recipe
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $category_id
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Recipe extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
}
