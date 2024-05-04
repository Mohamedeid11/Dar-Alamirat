<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\app\ViewModels\ProductViewModel;
use Modules\Product\Models\Product;
use Modules\Product\Models\Variant;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.form' ,new ProductViewModel());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title.en' => 'required|string',
            'description.en' => 'required|string',
            'instructions.en' => 'string',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'variant.*.price' => 'required|numeric',
            'variant.*.quantity' => 'required|integer',
            // Add other fields and rules as necessary
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->fill($request->only(['title', 'description', 'instructions']));
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();
        dd($product);

        // Handle variants
        foreach ($request->variant as $variantData) {
            if ($variantData['enabled'] === 'on') {
                $variant = new Variant([
                    'product_id' => $product->id,
                    'size' => $variantData['size'] ?? null,
                    'color' => $variantData['color'] ?? null,
                    'price' => $variantData['price'],
                    'quantity' => $variantData['quantity']
                ]);
                $variant->save();
            }
        }

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $path = $image->store('public/products');
                $product->images()->create(['path' => $path]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
