<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
    	return view('admin.products.index', compact('products'));
    }

    public function view(Product $product) 
    {
    	return view('admin.products.view', compact('product'));
    }

    public function create()
    {
    	return view('admin.products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create([
            'title' => $request->title, 
            'summary' => $request->summary, 
            'description' => $request->description, 
            'price' => $request->price, 
            'compared_at_price' => $request->compared_at_price, 
            'is_track_stock' => $request->is_track_stock, 
            'stock' => $request->stock, 
            'sku' => $request->sku, 
            'barcode' => $request->barcode
        ]);

        // upload image
        foreach ($request->images as $image) {
            $path = $image->storeAs('products', $image->getClientOriginalName(), 'storage');
            $product->photos()->create([
                // 'product_id' => $product->id,
                'photo' => $image->getClientOriginalName(),
            ]);
        }

        // variants
        if (!empty($request->variants['name']) && !empty($request->variants['values'])) {
            $name = $request->variants['name'];
            $values = explode(",", $request->variants['values']);
            foreach ($values as $value) {
                $product->variants()->create([
                    // 'product_id' => $product->id,
                    'name' => $name,
                    'value' => $value,
                ]);
            }
        }

        return redirect('/admin/products');
    }
}
