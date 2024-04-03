@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">My all delivery</h6>
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
                            <th>Is delivered</th>
                            <th>Created at</th>
                            <th>Deilvery at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($myDeliveries as $delivery)
                            <tr>
                                <td>{{$delivery->id}}</td>
                                <td>{{$delivery->supervisor->first_name}}</td>
                                <td>{{$delivery->deliveryman->first_name}}</td>
                                <td>{{$delivery->product->name}}</td>
                                <td>{{$delivery->price}}</td>
                                <td>{{$delivery->address}}</td>
                                <td>{{$delivery->delivered}}</td>
                                <td>{{$delivery->created_at}}</td>
                                <td>
                                    @if($delivery->delivered == "NO")
                                        <form action="{{ route('delivered', $delivery->id) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <button class="btn btn-info" type="submit">
                                                <i class="fa fa-check"></i>
                                                Delivered
                                            </button>
                                        </form>
                                    @else
                                        {{$delivery->updated_at}}
                                    @endif

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-right p-4">
                        {{$myDeliveries->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
