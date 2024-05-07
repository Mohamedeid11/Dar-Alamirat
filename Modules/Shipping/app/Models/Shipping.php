<?php

namespace Modules\Shipping\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shipping\Database\Factories\ShippingFactory;
use Spatie\Translatable\HasTranslations;

class Shipping extends Model
{
    use HasFactory , HasTranslations;

    protected $translatable = ['name'];

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title' , 'price' , 'duration' , 'status' ];

}
