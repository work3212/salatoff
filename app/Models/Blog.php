<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $anons
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Blog extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'anons',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
}
