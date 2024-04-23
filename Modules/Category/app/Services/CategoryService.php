<?php

namespace Modules\Category\app\Services;

use App\Models\User;
use Illuminate\Support\Arr;
use Modules\Category\Models\Category;

class CategoryService {

    public function getAllData()
    {
        return  Category::all();
    }

    public function getPaginatedData(array $data ,int $paginate = 15 )
    {
        return  Category::paginate($paginate);
    }

}
