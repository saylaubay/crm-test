@extends('layouts.site')

@section('content')

    <h1>User update</h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User edit</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @method('PUT')
                    @csrf

                    <label for="fName">Firstname</label>
                    <input value="{{ $user->first_name }}" type="text" class="form-control" id="fName" name="firstname" aria-describedby="emailHelp"
                           placeholder="Firstname">
                    <label class="mt-2" for="lName">Lastname</label>
                    <input value="{{ $user->last_name }}" type="text" class="form-control" id="lName" name="lastname" aria-describedby="emailHelp"
                           placeholder="Lastname">
                    <label class="mt-2" for="phone">Phone</label>
                    <input  value="{{ $user->phone }}" type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp"
                           placeholder="Phone">


                    <label class="mt-2" for="list">Category</label>
                    <select name="role" id="list" class="form-control" aria-label="Default select example">
                        <option selected value="{{$user->id}}">{{$user->role->name}}</option>
                        {{--                        <option selected>Open this select menu</option>--}}
                        @foreach($roles as $role)
                            @if($user->role->id == $role->id)
                                @continue
                            @endif
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="mt-4 btn btn-primary">update</button>
                </form>
            </div>
        </div>

    </div>

@endsection
