<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts()
    {
        $query = Products::where('active', 1)->get();
        return $query;;
    }

    public static function createProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|max:100',
            'product_reference' => 'required|max:100',
            'product_price' => 'required',
            'product_weigth' => 'required',
            'product_category' => 'required|max:100',
            'product_stock' => 'required',
        ]);
        $query = Products::create([
            'product_name' => $request->product_name,
            'product_reference' => $request->product_reference,
            'product_price' => $request->product_price,
            'product_weigth' => $request->product_weigth,
            'product_category' => $request->product_category,
            'product_stock' => $request->product_stock,
            'active' => 1
        ]);
        return $query;
    }

    public static function updateProduct(Request $request, Products $id)
    {
        $request->validate([
            'product_name' => 'required|max:100',
            'product_reference' => 'required|max:100',
            'product_price' => 'required',
            'product_weigth' => 'required',
            'product_category' => 'required|max:100',
            'product_stock' => 'required',
        ]);
        $id->update([
            'product_name' => $request->product_name,
            'product_reference' => $request->product_reference,
            'product_price' => $request->product_price,
            'product_weigth' => $request->product_weigth,
            'product_category' => $request->product_category,
            'product_stock' => $request->product_stock,
            'active' => $request->active
        ]);
    }
    public static function deleteProduct(Request $request)
    {
        Products::whereIn('id', $request->products)
            ->update([
                'active' => 0 // Add as many as you need
            ]);
    }
}
