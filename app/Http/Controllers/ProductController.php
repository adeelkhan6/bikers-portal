<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use App\SubCategory;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [

            'bikes'       => ProductCategory::latest()->where('name', 'bike')->first()->products,
            'parts'       => ProductCategory::latest()->where('name', 'part')->first()->products,
            'accessories' => ProductCategory::latest()->where('name', 'accessory')->first()->products
        ];

            return view('index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [

            'productCategories' => ProductCategory::all(),
            'subCategories' => subCategory::all()
        ];

            return view('admin.add_product')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([

            'product_category_id' => 'required',
            'sub_category_id'     => 'required',
            'name'                => 'required',
            'model'               => 'required',
            'description'         => 'required',
            'price'               => 'required',
            'quantity'            => 'required',
            'color'               => 'required',
            'image'               => ['image', 'nullable', 'max: 1999']
        ]);


        // handle file upload here
        if ($request->hasFile('image')) {
            // Get filename with the extension
             $fileName = time().$request->file('image')->getClientOriginalName();

           //upload image
             $path = $request->file('image')->storeAs('public/image', $fileName);

        }

        else {
            
            $fileName = 'no image.jpg';
        }
            $attributes['image'] = $fileName;

            Product:: create($attributes);

            return back()->with('success', 'Product has been created suuccessfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product_detail')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function kawasaki()
    {
        $products = SubCategory::where('name', 'kawasaki')->first()->products;
        
        return view('products')->with('products', $products);
    }

    public function yamaha()
    {   
        $products = SubCategory::where('name', 'yamaha')->first()->products;
        
        return view('products')->with('products', $products);
    }

    public function honda()
    {
        $products = SubCategory::where('name', 'honda')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function headlight()
    {
        $products = SubCategory::where('name', 'headlight')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function tyre()
    {
        $products = SubCategory::where('name', 'tyre')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function rim()
    {
        $products = SubCategory::where('name', 'rim')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function helmet()
    {
        $products = SubCategory::where('name', 'helmet')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function jacket()
    {
        $products = SubCategory::where('name', 'jacket')->first()->products;
        
        return view('products')->with('products', $products);   
    }

    public function shoes()
    {
        $products = SubCategory::where('name', 'shoes')->first()->products;
        
        return view('products')->with('products', $products);   
    }

}
