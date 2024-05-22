<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Modules\Page\Models\Page;
use Illuminate\Support\Facades\App;
use Modules\Product\Models\Product;
use App\Http\Controllers\Controller;
use Modules\Category\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
//        $categories = Category::active()->limit(3)->get();

        $normalCategories = Category::where('type', 'default')->get();
        $barCategories = Category::where('type', 'banner')->get();

        $categories = collect();
        $maxCount = max($normalCategories->count(), $barCategories->count());

        for ($i = 0; $i < $maxCount; $i++) {
            if (isset($normalCategories[$i])) {
                $categories->push($normalCategories[$i]);
            }
            if (isset($barCategories[$i])) {
                $categories->push($barCategories[$i]);
            }
        }

        $products = Product::active()->limit(3)->get();
        return view('themes.theme1.index' , get_defined_vars());
    }

    public function changeLanguage($locale)
    {
        session()->put('locale', $locale);
        App::setLocale($locale);
        return redirect()->back();
    }
    
}

