<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::where('category_id',$request->id)->get();

        return view('webcontents.products-list', compact('products'));
    }
    /**
     * Display a listing of the resource to the admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin(Request $request)
    {
        $products = Product::all();

        //join with the category table

        return view('webcontents.admin-products-list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webcontents.post-product-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
             'price'=> 'required',
             'location' => 'required',
             'contacts' => 'required',
             'quantity' => 'required',
             'image' => 'required',
             'extra' => 'required',
             'from' => 'required',
             'to' => 'required',
             'category' => 'required',
        ]);

        $path = $request->file('image')->store('public/products');

        $product = Product::create([
            'name' => $request->name,
             'price'=> $request->price,
             'location' => $request->location,
             'contacts' => $request->contacts,
             'quantity' => $request->quantity,
             'picture' => $path,
             'extra_info' => $request->extra,
             'date_from' => $request->from,
             'date_to' => $request->to,
             'category_id' => $request->category,
            //  'user_id' => Auth::user('id'),
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);

        return view('webcontents.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product = Product::find($request->id);

        return view('webcontents.product-edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $path = $request->file('image')->store('public/products');

        $product->name = $request->name;
        $product->price= $request->price;
        $product->location = $request->location;
        $product->contacts = $request->contacts;
        $product->quantity = $request->quantity;
        $product->picture = $path;
        $product->extra_info = $request->extra;
        $product->date_from = $request->from;
        $product->date_to = $request->to;
        $product->category_id = $request->category;


        $product->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::where('id',$request->id)->delete();

        return redirect()->route('fetchProductAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $_GET['search'];

        if($search != null){
            
            $products = Product::where('name','like','%'.$search.'%')->get();
            
            foreach ($products as $product) {

                echo '
                <div class="col-md-2">
                <a href="/product/show?id='.$product->id.'">'.$product->name.'</a>
                </div>
                ';
            }         
        }

    }
}
