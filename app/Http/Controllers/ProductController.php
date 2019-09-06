<?php

namespace App\Http\Controllers;

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
        $products = \App\Product::all();
        return view('products.index')->with(['products'=> $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        $tags = \App\Tag::all();
        //dd($categories);
        return view('products.create')->with(['categories' => $categories,'tags' => $tags]);
        

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'price'=>'required|numeric|between:0.00,99999.00',
            'category_id' => 'required|exists:categories,id',
            'status' => 'boolean',
        ]);
        $input = $request->all();
        $product = \App\Product::create($input);
        
        if ($request->has('tags')){
            $product->tags()->sync($request->tags);
        }

        session()->flash('message', 'Product successfully created');
        //dd($request->all());
        // $data = $request->all();
        // $data['category_id'] = 1;
        
        // \App\Product::create($request->all());

         return redirect('products');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find($id);
        //dd($product);
        return view('products.show')->with(['product' => $product]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($request->all();)
        $categories = \App\Category::all();
        $product = \App\Product::where('id',$id)->first();
        // dd($categories);
        return view('products.edit')->with(['product' => $product])->with(['categories' => $categories]);
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
        $input = $request->all();
        // dd($input);
        $product = \App\Product::where('id', $id)->first();
        $product->name = $input['name'];
        $product->category_id = $input['category_id'];    
        $product->price = $input['price'];
        $product->save();
        return redirect('products');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::where('id', $id)->delete();
        return redirect('products');

    }
}