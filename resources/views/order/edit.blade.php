@extends('layouts.site')

@section('content')

    <h1>CATEGORY update</h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Category</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.update', $order->id) }}" method="post">
                    @method('PUT')
                    @csrf

                    <label class="mt-2" for="deliveryman">Deliverymans</label>
                    <select required name="deliveryman" id="deliveryman" class="form-control"
                            aria-label="Default select example">
                        <option value="{{ $order->deliveryman->id }}"
                                selected>{{ $order->deliveryman->first_name." ".$order->deliveryman->last_name }}</option>
                        @foreach($deliverymans as $deliveryman)
                            @if($order->deliveryman->id === $deliveryman->id)
                                @continue
                            @endif
                            <option
                                value="{{$deliveryman->id}}">{{$deliveryman->first_name . " ". $deliveryman->last_name}}</option>
                        @endforeach
                    </select>

                    <label class="mt-2" for="product">Products</label>
                    <select required name="product" id="product" class="form-control"
                            aria-label="Default select example">
                        <option value="{{ $order->product->id }}" selected>{{ $order->product->name }}</option>
                        @foreach($products as $product)
                            @if($order->product->id === $product->id)
                                @continue
                            @endif
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>

                    <label for="price">Price</label>
                    <input value="{{ $order->price }}" required type="text" class="form-control" id="price" name="price"
                           aria-describedby="emailHelp"
                           placeholder="Price">

                    <label for="address">Address</label>
                    <textarea required class="form-control" id="address" name="address" rows="7">{{ $order->address }}</textarea>

                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>

    </div>

@endsection
