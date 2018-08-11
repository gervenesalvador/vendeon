<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use App\Cart;
use App\Customer;
use App\Order;

class CartController extends Controller
{
    public function index()
    {
    	$carts = Cart::session();
        if (!$carts['result']) {
            return $carts['message'];
        }

    	return view('cart.index', ['carts' => $carts['data']]);
    }

    public function store(CartRequest $request)
    {
        $currect_cart = $request->session()->get('cart', []);
        if (!empty($currect_cart)) {
            $cart = Cart::whereIn('id', $currect_cart)->where('product_id', $request->product_id)->first();
            if (!empty($cart) &&
                    $cart->variants_1 == $request->variants_1 &&
                    $cart->variants_2 == $request->variants_2 &&
                    $cart->variants_3 == $request->variants_3) {
                $cart->quantity = (int)$cart->quantity + 1;
                $cart->customer_id = $request->session()->get('checkout', null);
                $cart->save();

                return redirect('cart');
            }
        }
    	$cart = Cart::create([
    		'product_id' => $request->product_id,
    		'quantity' => $request->quantity,
            'variants_1' => $request->variants_1,
            'variants_2' => $request->variants_2,
            'variants_3' => $request->variants_3,
    		'price' => $request->price,
    	]);

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
        $carts = Cart::session();
        if (!$carts['result']) {
            return $carts['message'];
        }

        return view('cart.checkout', [
            'carts' => $carts['data'], 
            'cities' => Cart::cities(),
            'checkout' => Customer::session(),
        ]);
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
        $session_cart = session('cart', []);

        if (empty($session_cart)) {
            return 'Session empty cart';
        }

        if ($request->session()->get('checkout', null) === null) {
            $customer = new Customer;
        } else {
            $customer = Customer::find($request->session()->get('checkout'));
        }
        $customer->email = $request->email;
        $customer->contact_number = $request->contact_number;
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->city = $request->city;
        $customer->barangay = $request->barangay;
        $customer->address = $request->address;
        $customer->country = 'Philippines';
        $customer->zip_code = $request->zip_code;

        if (!$customer->save()) {
            return 'Error saving customer';
        }

        $request->session()->put('checkout', $customer->id);
        foreach ($session_cart as $value) {
            $cart = Cart::where('id', $value)->update(['customer_id' => $customer->id]);
        }

        return redirect('shipping-method');
    }

    public function shippingMethod()
    {
        $checkout =  Customer::session();
        if (!$checkout['result']) {
            return $checkout['message'];
        }
        $carts = Cart::session();
        if (!$carts['result']) {
            return $carts['message'];
        }

        return view('cart.shipping_method', [
            'checkout' => $checkout['data'],
            'carts' => $carts['data'],
        ]);
    }

    public function shippingMethodAction(Request $request)
    {
        $data = $request->validate([
            'shipping_method' => 'required|string',
        ]);

        if ($request->session()->get('order', null) === null) {
            $order = new Order;  
        } else {
            $order = Order::find($request->session()->get('order'));
        }
        $order->is_shipping = 1;
        $order->shipping_method = $request->shipping_method;
        $order->customer_id = $request->session()->get('checkout');

        if (!$order->save()) {
            return 'error';
        }

        $request->session()->put('order', $order->id);

        return redirect('/payment-method');
    }

    public function paymentMethod()
    {
        //CHECK IF COMPLETE DATA
        $checkout =  Customer::session();
        if (!$checkout['result']) {
            return $checkout['message'];
        }
        $carts = Cart::session();
        if (!$carts['result']) {
            return $carts['message'];
        }
        $order = Order::session();
        if (!$order['result']) {
            return $order['message'];
        }

        return view('cart.payment_method', [
            'checkout' => $checkout['data'],
            'carts' => $carts['data'],
            'order' => $order['data'],
            'cities' => Cart::cities(),
        ]);
    }

    public function paymentMethodAction(Request $request)
    {
        $order_session = Order::session();
        if ($order_session['result'] == false) {
            return $order_session['message'];
        }
        $order = $order_session['data'];

        if ($request->billing_address == 'different') {
            $request->validate([
                'payment_method' => 'required',
                'billing_method' => 'required',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'city' => 'required|string',
                'barangay' => 'required|string',
                'complete_address' => 'required|string',
                'country' => 'required|string',
                'zip_code' => 'required|number',
                'contact_number' => 'required',
            ]);
            $data = [
                'payment_method' => $request->payment_method,
                'billing_method' => $request->billing_method,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->complete_address,
                'country' => 'Philippines',
                'zip_code' => $request->zip_code
            ];
        } else {
            $request->validate([
                'payment_method' => 'required',
                'billing_method' => 'required',
            ]);

            $checkout_session = Customer::session();
            if ($checkout_session['result'] == false) {
                return $checkout_session['message'];
            }
            $customer = $checkout['data'];

            $data = [
                'payment_method' => $request->payment_method,
                'billing_method' => $request->billing_method,
                'firstname' => $customer->firstname,
                'lastname' => $customer->lastname,
                'city' => $customer->city,
                'barangay' => $customer->barangay,
                'address' => $customer->address,
                'country' => $customer->country,
                'zip_code' => $customer->zip_code
            ];
        }
        $data['is_payment'] = 1;
        
        if (!$order-update($data)) {
            return 'Error saving order';
        }
        parent::clearOrderSession();

        return redirect('/success-order//'.$order->uid);
    }

    public function successOrder($uid)
    {
        $order = Order::where('uid', $uid)->first();
        if (empty($order)) {
            return 'cart empty';
        }

        return $order;

        return view('cart.success_order', [
            'order' => $order, 
            // 'checkout' => Customer::session(),
        ]);
    }

    public function clearSession()
    {
        parent::clearOrderSession();
        return redirect('/');
    }
}