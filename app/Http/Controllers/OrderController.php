<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type=null,$item_id)
    {

        if ($type == 'product') {
            $product = Product::find($item_id);
            if (!$product) {
                return back()->with('danger','Shop not found. It is either deleted or it is missing.');
            }
            $orders   = $product->orders;

            return view('system.orders.index',compact(['orders','type','item_id']));
        }
        $orders = Order::latest()->paginate(50);
        return view('system.orders.index',compact(['orders','type','id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($type=null,$item_id)
    {
        return view('system.orders.create',compact(['type','item_id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'user_id'   => 'required',
            'status'    => 'required',
        ]);
        Order::create($request->all());
        if ($type && $item_id) {
            return redirect()->route('orders.index',[$type,$item_id])->with('success','Order made successfully!');
        }
        return redirect()->back()->with('success','Order made successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($type=null, $item_id, $id)
    {
        $order    = Order::find($id);
        if (!$order) {
            return back()->with('danger', 'Order not found. It is either missing or deleted');
        }
        return view('system.orders.show', compact(['order']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($type=null, $item_id, $id)
    {
        $order    = Order::find($id);
        if (!$order) {
            return back()->with('danger', 'Order not found. It is either missing or deleted');
        }
        return view('system.orders.edit', compact(['order']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'user_id'   => 'required',
            'status'    => 'required',
        ]);
        Order::find($id)->update($request->all());

        if ($type && $item_id) {
            return redirect()->route('orders.index',[$type,$item_id])->with('success','Order updated successfully!');
        }
        return redirect()->back()->with('success','Order updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::where('id',$id)->get()->first();
        $item->delete();
        return redirect()->back()->with('danger', 'Order deleted successfully');
    }
}
