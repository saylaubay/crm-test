@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create new user</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf

                    <label for="fName">Firstname</label>
                    <input type="text" class="form-control" id="fName" name="firstname" aria-describedby="emailHelp"
                           placeholder="Firstname">
                    <label class="mt-2" for="lName">Lastname</label>
                    <input type="text" class="form-control" id="lName" name="lastname" aria-describedby="emailHelp"
                           placeholder="Lastname">
                    <label class="mt-2" for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp"
                           placeholder="Phone">


                    <label class="mt-2" for="list">Role</label>
                    <select name="role" id="list" class="form-control" aria-label="Default select example">
                        {{--                        <option selected>Open this select menu</option>--}}
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>

                    <label class="mt-2" for="password">Password</label>
                    <input  type="text" class="form-control" id="password" name="password" aria-describedby="emailHelp"
                           placeholder="Name">
                    <button type="submit" class="btn btn-primary mt-4">Save</button>
                </form>
            </div>
        </div>

    </div>

@endsection
