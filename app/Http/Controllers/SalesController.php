<?php

namespace App\Http\Controllers;

use App\Models\Productbysales;
use App\Models\Products;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public static function createSale(Request $request)
    {
        $sale_products = $request->products;
        $query_sale = Sales::create([
            'total_sale' => $request->sale
        ]);
        foreach ($sale_products as $product) {
            $new_stock = $product['product_stock'] - $product['qty'];
            $query = Products::whereIn('id', [$product['id']])
                ->update([
                    'product_stock' =>  $new_stock
                ]);
            Productbysales::create([
                'product_id' => $product['id'],
                'product_name' => $product['product_name'],
                'product_reference' => $product['product_reference'],
                'product_price' => $product['product_price'],
                'product_weigth' => $product['product_weigth'],
                'product_category' => $product['product_category'],
                'product_stock' => $product['product_stock'],
                'product_qty' => $product['qty'],
                'id_sale' => $query_sale->id
            ]);
        }

        return $query_sale;
    }
}
