@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Category_id</th>
                            @check("PRODUCT_UPDATE")
                            <th>Edit</th>
                            @endcheck
                            @check("PRODUCT_DELETE")
                            <th>Delete</th>
                            @endcheck
                        </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->category_id}}</td>
                                @check("PRODUCT_UPDATE")
                                <td>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-circle">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                @endcheck
                                @check("PRODUCT_DELETE")
                                <td>
                                    <form class="btn btn-danger btn-circle" action="{{ route('products.destroy', $product->id) }}" method="post" >
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
                        {{$products->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
