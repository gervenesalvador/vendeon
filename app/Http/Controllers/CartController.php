<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use App\Cart;

class CartController extends Controller
{
    public function index()
    {
    	$sessions = session('cart', []);
        $carts = [];

        if (!empty($sessions)) {
            $carts = Cart::whereIn('id', $sessions)->get();
        }
        // return $carts;
    	return view('cart.index', compact('carts'));
    }

    public function store(CartRequest $request)
    {
    	$cart = Cart::create([
    		'product_id' => $request->product_id,
    		'quantity' => $request->quantity,
            'variants_1' => $request->variants_1,
            'variants_2' => $request->variants_2,
            'variants_3' => $request->variants_3,
    		'price' => $request->price,
    	]);

		$currect_cart = $request->session()->get('cart', []);
		$currect_cart[] = $cart->id;
		$request->session()->put('cart', $currect_cart);

    	return redirect('cart');
    }

    public function update(Request $request)
    {
        foreach ($request->carts as $cart_id => $cart) {
            $update_cart = Cart::where('id', $cart['id'])->update(['quantity' => $cart['quantity']]);
        }

        return redirect('cart');
    }

    public function checkout()
    {
        $sessions = session('cart', []);
        $carts = [];
        $cities = Cart::cities();

        if (!empty($sessions)) {
            $carts = Cart::whereIn('id', $sessions)->get();
        }

        return view('cart.checkout', compact('carts', 'cities'));
    }

    public function checkoutAction(Request $request)
    {
        // $validated = $request->validate([
        //     ''
        // ])
    }
}
