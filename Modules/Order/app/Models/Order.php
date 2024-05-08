<?php

namespace Modules\Order\Models;

use Modules\Client\Models\Client;
use Modules\Product\Models\Product;
use Modules\Shipping\Models\Shipping;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
{
    return $this->belongsTo(Client::class);
}

public function shippingMethod()
{
    return $this->belongsTo(Shipping::class);
}


}
