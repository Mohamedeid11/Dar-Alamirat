<?php

namespace Modules\Client\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Client\Database\Factories\ClientFactory;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['first_name','last_name','email','phone_number','birthday','gender'];

    protected static function newFactory(): ClientFactory
    {
        //return ClientFactory::new();
    }
}
