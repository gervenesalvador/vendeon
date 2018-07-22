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
        return $request->all();
        $data = $request->validate([
            'email' => 'nullable|email',
            'contact_number' => 'required',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'city' => 'required|string',
            'barangay' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'required',
        ]);

        $checkout = $request->session()->get('chechkout', []);
        $checkout['email'] = $request->email;
        $checkout['contact_number'] = '+63'+str_replace('-', '', $request->contact_number);
        $checkout['firstname'] = $request->firstname;
        $checkout['lastname'] = $request->lastname;
        $checkout['city'] = $request->city;
        $checkout['barangay'] = $request->barangay;
        $checkout['address'] = $request->address;
        $checkout['zip_code'] = $request->zip_code;

        $request->session()->put('checkout', $checkout);

        return redirect('shipping-method');
        
    }

    public function shippingMethod()
    {
        return view('cart.shipping_method');
    }
}
