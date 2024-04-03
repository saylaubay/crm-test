@extends('layouts.site')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Phone</th>
                            <th>Role_id</th>
                            @check("USER_UPDATE")
                            <th></th>
                            @endcheck
                            @check("USER_DELETE")
                            <th></th>
                            @endcheck
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->role_id}}</td>
                                @check("USER_UPDATE")
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-circle">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                @endcheck
                                @check("USER_DELETE")
                                <td>
                                    <form class="btn btn-danger btn-circle" action="{{ route('users.destroy', $user->id) }}" method="post" >
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
                        {{$users->links()}}
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
