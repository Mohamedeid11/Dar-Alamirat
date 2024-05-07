<?php

namespace Modules\Shipping\Services;

use Modules\Shipping\Models\Shipping;

class ShippingService
{
    public function handle()
    {
        //
    }

    public function getAllData()
    {
        return Shipping::latest()->get();
    }

    public function getPaginatedData(array $data = [] ,int $paginate = 20 )
    {
        return  Shipping::paginate($paginate);
    }

    public function storeData(array $data)
    {
        $data['slug'] = Str::slug($data['name']['en']);

        $shipping = Shipping::create($data);

        return  $shipping;
    }

    public function updateData(array $data , $shipping)
    {

        $data['slug'] = Str::slug($data['name']['en']);

        $shipping->update($data);

        return  $shipping;
    }
}
