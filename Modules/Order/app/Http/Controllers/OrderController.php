<?php

namespace Modules\Order\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Models\Product;
use Modules\Product\Models\Variant;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Shipping\Models\Shipping;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.orders.orders');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products=Product::with(['variants','inventoryItems','inventory'])->get();
        $clients=User::get();
        $shippingMethods=Shipping::get();
       // dd($products);
        return view('dashboard.orders.create_order',compact('products','clients','shippingMethods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('order::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('order::edit');
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


    public function getVariants(Request $request)
    {
        $productId = $request->input('product_id');
        $variants = Variant::where('product_id', $productId)->get();

        return response()->json($variants);
    }

}
