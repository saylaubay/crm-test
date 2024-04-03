<?php


namespace App\services;


use App\Models\Order;
use Illuminate\Support\Carbon;

class OrderService
{

    public function getAll()
    {
        return Order::all();
    }

    public function getAllPaginate()
    {
        return Order::paginate(10);
    }

    public function create($request)
    {
        Order::create([
            'supervisor_id'=>auth()->user()->id,
            'deliveryman_id'=>$request->deliveryman,
            'product_id'=>$request->product,
            'price'=>$request->price,
            'address'=>$request->address,
        ]);
    }

    public function update($request, $order)
    {
        $order->deliveryman_id = $request->deliveryman;
        $order->product_id = $request->product;
        $order->price = $request->price;
        $order->address = $request->address;
        $order->update();
    }

    public function delete($order)
    {
        $order->delete();
    }

    public function orderByDate($request)
    {
        return Order::query()
            ->whereBetween('created_at', [$request->start, $request->end])->get();
    }

    public function myDelivered()
    {
        return Order::where('deliveryman_id', auth()->user()->id)
            ->where('delivered', 'YES')
            ->paginate(10);
    }

    public function myAllDelivered()
    {
        return Order::where('deliveryman_id', auth()->user()->id)
            ->where('delivered', 'YES')
            ->get();
    }

    public function myUnDelivered()
    {
        return  Order::where('deliveryman_id', auth()->user()->id)
            ->where('delivered', 'NO')
            ->paginate(10);
    }

    public function myAllUnDelivered()
    {
        return  Order::where('deliveryman_id', auth()->user()->id)
            ->where('delivered', 'NO')
            ->get();
    }

    public function mydelivery()
    {
        return Order::where('deliveryman_id', auth()->user()->id)->paginate(10);
    }

    public function myAlldelivery()
    {
        return Order::where('deliveryman_id', auth()->user()->id)->get();
    }

    //For Supervisor
    public function sMyAlldelivery()
    {
        return Order::where('supervisor_id', auth()->user()->id)->get();
    }

    public function delivered($id)
    {
        $order = Order::where('deliveryman_id', auth()->user()->id)
            ->where('id', $id)->first();
        $order->delivered = "YES";
        $order->update();
    }

    public function export($request)
    {
        $start = Carbon::create(
            substr($request->start,0,4),
            substr($request->start,5,2),
            substr($request->start,8,2),
            0,
            0,
            1
        );
        $end = Carbon::create(
            substr($request->end,0,4),
            substr($request->end,5,2),
            substr($request->end,8,2),
            23,
            59,
            59
        );
        return ['start'=>$start, 'end'=>$end];
    }

    public function getAllNoDelivery()
    {
        return Order::where('delivered', 'NO')->get();
    }

    public function getAllDelivrey()
    {
        return Order::where('delivered', 'YES')->get();
    }

}
