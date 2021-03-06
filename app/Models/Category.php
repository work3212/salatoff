<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $image
 * @property string|null $class_category
 * @property string|null $class_top_menu
 * @property int $heading
 * @property int $parent
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'description',
        'image',
        'class_category',
        'class_top_menu',
        'heading',
        'parent',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
}
