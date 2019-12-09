<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the constructor of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
        // $this->middleware('role:super-admin|admin|client')->except('show','index');
        
        // $this->middleware('permission:can_view_questions',['only'=>'index']);
        // $this->middleware('permission:can_add_questions',['only'=>['create','store']]);
        // $this->middleware('permission:can_delete_post',['only'=>'destroy']);
        // $this->middleware('permission:can_update_questions',['only'=>['update','edit']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type=null, $item_id)
    {
        $products   = Product::latest()->paginate(20);
        // sort from categories

        return view('system.products.index',compact(['products','type','item_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type=null, $item_id)
    {
        return view('system.products.create',compact(['item_id','type']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $type=null, $item_id)
    {
        request()->validate([
            'product_name'  => 'required',
            'user_id'       => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index',['type','item_id'])->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($type=null, $item_id, $id)
    {
        $product    = Product::find($id);
        if (!$product) {
            return back()->with('danger', 'Product not found. It is either missing or deleted');
        }
        return view('system.products.edit', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($type=null, $item_id, $id)
    {
        $product    = Product::find($id);
        if (!$product) {
            return back()->with('danger', 'Product not found. It is either missing or deleted');
        }
        return view('system.products.edit', compact(['product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type=null, $item_id, $id)
    {
        request()->validate([
            'product_name'  => 'required',
            'user_id'       => 'required',
        ]);
        Product::find($id)->update($request->all());
        return redirect()->route('products.index',['type','item_id'])->with('success','Product created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($type=null, $item_id, $id)
    {
        $item = Product::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->route('products.index',['type','item_id'])->with('danger', 'Product deleted successfully!');
    }
}
