@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Orders</h6>
                <div class="input-group date">
                    {{--                    <label for="start">start</label>--}}

                    <div class="col-md-4"></div>

                    @check("EXPORT_EXCEL")
                    <form class="col-md-12" action="{{ route('export') }}" method="post">

                        @csrf
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input required type="date" id="start" name="start" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <input required type="date" id="end" name="end" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <button  class="btn btn-success" type="submit">
                                            Export
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endcheck
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Supervisor</th>
                            <th>Deliveryman</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>address</th>
                            <th>Delivered</th>
                            @check("ORDER_UPDATE")
                            <th></th>
                            @endcheck
                            @check("ORDER_DELETE")
                            <th></th>
                            @endcheck
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->supervisor->first_name}}</td>
                                <td>{{$order->deliveryman->first_name}}</td>
                                <td>{{$order->product->name}}</td>
                                <td>{{$order->price}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->delivered}}</td>
                                @check("ORDER_UPDATE")
                                <td>
                                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning btn-circle">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                @endcheck
                                @check("ORDER_DELETE")
                                <td>
                                    <form class="btn btn-danger btn-circle"
                                          action="{{ route('orders.destroy', $order->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-circle" type="submit">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                @endcheck
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right p-4">
                        {{$orders->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
