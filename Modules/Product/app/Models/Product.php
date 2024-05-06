<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Modules\Brand\Models\Brand;
use Modules\Category\Models\Category;
use Modules\Product\Database\factories\ProductFactory;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory , HasTranslations ,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description',
        'instructions',
        'thumbnail',
        'active',
        'slug',
        'category_id',
        'brand_id'
    ];

    public $translatable = ['title', 'description', 'instructions'];

    /**
     * Get the category associated with the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the brand associated with the product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Get the variants for the product.
     */
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    /**
     * Get the inventory items for the product.
     */
    public function inventoryItems()
    {
        return $this->hasMany(Inventory::class);
    }

    /**
     * Get the media for the product.
     */
    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }

    public function inventory()
    {
        return $this->hasManyThrough(Inventory::class, Variant::class);
    }


    public function getThumbnailAttribute()
    {
        if (isset($this->attributes['thumbnail']) && Storage::disk('public/products/thumbnail')->exists($this->attributes['thumbnail'])){
            return storage_asset($this->attributes['thumbnail']);
        }else{
            return asset('assets/images/image.png');
        }
    }


}
