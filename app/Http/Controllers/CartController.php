<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $cart = session()->get('cart');

        //if cart has nothing yet means there is no such product into the cart then this the first product
        if(! $cart) {

                $cart[$product->id] = [

                'name'      => $product->name,
                'price'     => $product->price,
                'quantity'  => $request->quantity,
                'image'     => $product->image,
                'color'     => $product->color

            ];

                session()->put('cart', $cart);

                //extracting product one by one from cart and adding all products's total and put in sesssion
                    $total = 0;

                foreach (session('cart') as $product) {
                    

                    $total += $product['price'] * $product['quantity'];

                }
                    session()->put('total', $total);

                if (request()->has('buy')) {
                    
                    return view('user.checkout');
                }

                return back()->with('success', 'Product has been added to cart successfully !');
        }

        //if this item is exists in cart then updat the given quantity
        if (isset($cart[$product->id])) {
            
                $cart[$product->id]['quantity'] = $request->quantity;



                session()->put('cart', $cart);

                //extracting product one by one from cart and adding all products's total and put in sesssion
                    $total = 0;

                foreach (session('cart') as $product) {
                    

                    $total += $product['price'] * $product['quantity'];

                }
                    session()->put('total', $total);

                if (request()->has('buy')) {
                    
                    return view('user.checkout');
                }

                return back()->with('success', 'Product is updated again !');
        }

                //if this itme is not exists into the cart
                $cart[$product->id] = [

                'name'      => $product->name,
                'price'     => $product->price,
                'quantity'  => $request->quantity,
                'image'     => $product->image,
                'color'     => $product->color

            ];

                session()->put('cart', $cart);

                //extracting product one by one from cart and adding all products's total and put in sesssion
                    $total = 0;
                    
                foreach (session('cart') as $product) {
                    

                    $total += $product['price'] * $product['quantity'];

                }
                    session()->put('total', $total);

                if (request()->has('buy')) {
                    
                    return view('user.checkout');
                }

                return back()->with('success', 'Product has been added to cart successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = session('cart');

        unset($cart[$id]);

        session()->put('cart', $cart);

        return back()->with('success', 'Item remove from cart successfully !');
    }
}
