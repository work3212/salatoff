<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property float $price
 * @property string|null $bzu
 * @property string|null $energy
 * @property string|null $composition
 * @property int $category_id
 * @property int|null $min_order
 * @property int|null $implementation_period
 * @property int|null $packaging
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at

 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'bzu',
        'energy',
        'composition',
        'category_id',
        'min_order',
        'implementation_period',
        'packaging'
    ];
}
