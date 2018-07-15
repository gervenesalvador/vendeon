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

    public function view($sef_url) 
    {
        $product = Product::where('sef_url', $sef_url)->first();
        $variants = [];
        if (!empty($product->variants)) {
            if ($product->variants_1 != null) {
                $variants['variants_1'] = $product->variants->pluck('value_1');
            }
            if ($product->variants_2 != null) {
                $variants['variants_2'] = $product->variants->pluck('value_2');
            }
            if ($product->variants_3 != null) {
                $variants['variants_3'] = $product->variants->pluck('value_3');
            }
        }

    	return view('products.view', compact('product', 'variants'));
    }

    public function create()
    {
    	return view('admin.products.create');
    }

    public function store(ProductRequest $request)
    {
        // return $request->all();
        $alert = [];

        $product = new Product;
        $product->title = $request->title; 
        $product->summary = $request->summary; 
        $product->description = $request->description; 
        $product->price = $request->price; 
        $product->compared_at_price = $request->compared_at_price; 
        $product->is_track_stock = $request->is_track_stock; 
        $product->stock = $request->stock; 
        $product->sku = $request->sku; 
        $product->barcode = $request->barcode;
        $product->sef_url = $request->title;

        if (!empty($request->variants_1)) {
            if (!empty($request->variants_1_values)) {
                $product->variants_1 = $request->variants_1; 
            } else {
                $alert['variants_1'] = 'empty values'; 
            }
        }
        if (!empty($request->variants_2)) {
            if (!empty($request->variants_2_values)) {
                $product->variants_2 = $request->variants_2; 
            } else {
                $alert['variants_2'] = 'empty values'; 
            }
        }

        if (!empty($request->variants_3)) {
            if (!empty($request->variants_3_values)) {
                $product->variants_3 = $request->variants_3; 
            } else {
                $alert['variants_3'] = 'empty values'; 
            }
        }

        if (!$product->save()) {
            $alert['product_save'] = "Error Saving";
            return redirect('admin/products');
        }
        // $product = Product::create([
        //     'title' => $request->title, 
        //     'summary' => $request->summary, 
        //     'description' => $request->description, 
        //     'price' => $request->price, 
        //     'compared_at_price' => $request->compared_at_price, 
        //     'is_track_stock' => $request->is_track_stock, 
        //     'stock' => $request->stock, 
        //     'sku' => $request->sku, 
        //     'barcode' => $request->barcode,
        //     'sef_url' => $request->title,
        //     'variants_1' => $request->variants_1,
        //     'variants_2' => $request->variants_2,
        //     'variants_3' => $request->variants_3,
        // ]);

        // upload image
        foreach ($request->images as $image) {
            $path = $image->storeAs('products', $image->getClientOriginalName(), 'storage');
            $product->photos()->create([
                'file_name' => $image->getClientOriginalName(),
            ]);
        }

        if (!empty($request->variants_1) && !empty($request->variants_1_values)) {
            $variants_1 = explode(',', $request->variants_1_values);
            foreach ($variants_1 as $v1 => $variant_1) {

                $variant = [
                    'value_1' => $variant_1,
                    'price' => $request->price,
                    'compared_at_price' => $request->compared_at_price,
                    'is_track_stock' => $request->is_track_stock,
                    'stock' => $request->stock,
                    'sku' => $request->sku,
                    'barcode' => $request->barcode,
                ];

                if (!empty($request->variants_2) && !empty($request->variants_2_values)) {
                    $variants_2 = explode(',', $request->variants_2_values);
                    foreach ($variants_2 as $v2 => $variant_2) {
                        $variant['value_2'] = $variant_2;

                        if (!empty($request->variants_3) && !empty($request->variants_3_values)) {
                            $variants_3 = explode(',', $request->variants_3_values);
                            foreach ($variants_3 as $v3 => $variant_3) {
                                $variant['value_3'] = $variant_3;

                                $product->variants()->create($variant);
                            }
                        } else {
                            unset($variant['value_3']);  // for safety
                            $product->variants()->create($variant);
                        }
                    }
                } else {
                    unset($variant['value_2']);  // for safety
                    unset($variant['value_3']);  // for safety
                    $product->variants()->create($variant);
                }
            }
        }

        

        return redirect('/admin/products');
    }
}
