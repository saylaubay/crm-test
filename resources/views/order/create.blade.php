@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('orders.store') }}" method="post">
                        @csrf
                        <label class="mt-2" for="deliveryman">Deliverymans</label>
                        <select required name="deliveryman" id="deliveryman" class="form-control" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            @foreach($deliverymans as $deliveryman)
                                <option value="{{$deliveryman->id}}">{{$deliveryman->first_name . " ". $deliveryman->last_name}}</option>
                            @endforeach
                        </select>

                        <label class="mt-2" for="product">Products</label>
                        <select required name="products" id="product" class="form-control" aria-label="Default select example">
                            <option value="" selected>Open this select menu</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>

                        <label for="price">Price</label>
                        <input required type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp"
                               placeholder="Price">

                        <label for="address">Address</label>
                        <textarea required class="form-control" id="address" name="address" rows="7"></textarea>

                        <button type="submit" class="btn btn-primary mt-4">Save</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
