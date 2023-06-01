<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderHistory = OrderHistory::all();

        return view('orderHistories.index',compact('orderHistory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orderHistories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        $order->save();

        return redirect()->route('orderHistories.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function show(OrderHistory $orderHistory)
    {
        return view('orderHistories.show',compact('orderHistory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderHistory $orderHistory)
    {
        return view('orderHistories.edit',compact('orderHistory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderHistory $orderHistory)
    {
        $orderHistory->update($request->all());
        $orderHistory->save();

        return redirect()->route('orderHistories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderHistory  $orderHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderHistory $orderHistory)
    {
        $orderHistory->delete();

        return redirect()->route('orderHistories.index');
    }
}
