<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $product = Product::create($data);

        return response()->json($product);

    }
}
