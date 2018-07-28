<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use App\Cart;
use App\Customer;

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
        $session_cart = session('cart', []);
        $checkout = session('checkout', null);
        $carts = [];
        $cities = Cart::cities();

        if (!empty($session_cart)) {
            $carts = Cart::whereIn('id', $session_cart)->get();
        }
        if (!is_null($checkout) {
            $checkout = Customer::find($checkout);
        }

        return view('cart.checkout', compact('carts', 'cities', 'checkout'));
    }

    public function checkoutAction(Request $request)
    {
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

        $customer = new Customer;
        $customer->email = $request->email;
        $customer->contact_number = $request->contact_number;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->city = $request->city;
        $customer->barangay = $request->barangay;
        $customer->address = $request->address;
        $customer->zip_code = $request->zip_code;

        if (!$customer->save()) {
            return 'Error saving customer';
        }

        $request->session()->put('checkout', $customer->id);
        $session_cart = session('cart', []);

        if (empty($session_cart)) {
            return 'Error cart';
        }
        foreach ($session_cart as $value) {
            $cart = Cart::where('id', $value)->update(['customer_id' => $customer->id]);
        }

        return redirect('shipping-method');
        
    }

    public function shippingMethod()
    {
        $checkout = session('checkout', []);
        if (empty($checkout)) {
            return "ERROR GO BACK";
        }
        
        $sessions = session('cart', []);
        $carts = [];
        $cities = Cart::cities();

        if (!empty($sessions)) {
            $carts = Cart::whereIn('id', $sessions)->get();
        }

        return view('cart.shipping_method', compact('carts', 'checkout'));
    }
}
 