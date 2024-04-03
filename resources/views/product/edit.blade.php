@extends('layouts.site')

@section('content')

    <h1>Product update</h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product edit</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @method('PUT')
                    @csrf

                    <label for="list">Category</label>
                    <select  name="category_id" id="list" class="form-control" aria-label="Default select example">
                        <option selected value="{{$product->category->id}}">{{$product->category->name}}</option>

                    @foreach($categories as $category)
                            @if($category->id == $product->category->id)
                                @continue
                            @endif
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" value="{{$product->name}}" class="form-control" id="name" name="name"
                               aria-describedby="emailHelp" placeholder="Name">
                    </div>

                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>

    </div>

@endsection
