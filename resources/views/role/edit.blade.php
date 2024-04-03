@extends('layouts.site')

@section('content')

    <h1>Edit role or permission</h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit role or permission</h6>
            </div>
            <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="post">

                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{$role->name}}" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                        </div>

                        <div class="border mb-1 p-2">
                            <table class="table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="1" class="form-check-input" type="checkbox"
                                                   {{ $list[1] ? 'checked' : '' }}
                                                   id="1">
                                            <label class="form-check-label" for="1">
                                                Create
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="2" class="form-check-input" type="checkbox"
                                                   {{ $list[2] ? 'checked' : '' }}
                                                   id="2">
                                            <label class="form-check-label" for="2">
                                                Read
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="3" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[3] ? 'checked' : '' }}
                                                   id="3">
                                            <label class="form-check-label" for="3">
                                                Read All
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="4" class="form-check-input" type="checkbox" value=""
                                                       {{ $list[4] ? 'checked' : '' }}
                                                   id="4">
                                            <label class="form-check-label" for="4">
                                                Update
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="5" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[5] ? 'checked' : '' }}
                                                   id="5">
                                            <label class="form-check-label" for="5">
                                                Delete
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="border mb-1 p-2">
                            <table class="table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">User</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="6" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[6] ? 'checked' : '' }}
                                                   id="6">
                                            <label class="form-check-label" for="6">
                                                Create
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="7" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[7] ? 'checked' : '' }}
                                                   id="7">
                                            <label class="form-check-label" for="7">
                                                Read
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="8" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[8] ? 'checked' : '' }}
                                                   id="8">
                                            <label class="form-check-label" for="8">
                                                Read All
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="9" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[9] ? 'checked' : '' }}
                                                   id="9">
                                            <label class="form-check-label" for="9">
                                                Update
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="10" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[10] ? 'checked' : '' }}
                                                   id="10">
                                            <label class="form-check-label" for="10">
                                                Delete
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="border mb-1 p-2">
                            <table class="table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="11" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[11] ? 'checked' : '' }}
                                                   id="11">
                                            <label class="form-check-label" for="11">
                                                Create
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="12" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[12] ? 'checked' : '' }}
                                                   id="12">
                                            <label class="form-check-label" for="12">
                                                Read
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="13" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[13] ? 'checked' : '' }}
                                                   id="13">
                                            <label class="form-check-label" for="13">
                                                Read All
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="14" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[14] ? 'checked' : '' }}
                                                   id="14">
                                            <label class="form-check-label" for="14">
                                                Update
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="15" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[15] ? 'checked' : '' }}
                                                   id="15">
                                            <label class="form-check-label" for="15">
                                                Delete
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="border mb-1 p-2">
                            <table class="table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Order</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="16" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[16] ? 'checked' : '' }}
                                                   id="16">
                                            <label class="form-check-label fa-s15" for="16">
                                                Create
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="17" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[17] ? 'checked' : '' }}
                                                   id="17">
                                            <label class="form-check-label" for="17">
                                                Read
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="18" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[18] ? 'checked' : '' }}
                                                   id="18">
                                            <label class="form-check-label" for="18">
                                                Read All
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="19" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[19] ? 'checked' : '' }}
                                                   id="19">
                                            <label class="form-check-label" for="19">
                                                Update
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="20" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[20] ? 'checked' : '' }}
                                                   id="20">
                                            <label class="form-check-label" for="20">
                                                Delete
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="21" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[21] ? 'checked' : '' }}
                                                   id="21">
                                            <label class="form-check-label" for="21">
                                                ORDER_BY_DATE
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="22" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[22] ? 'checked' : '' }}
                                                   id="22">
                                            <label class="form-check-label" for="22">
                                                MY_DELIVERED
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="23" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[23] ? 'checked' : '' }}
                                                   id="23">
                                            <label class="form-check-label" for="23">
                                                MY_UNDELIVERED
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="24" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[24] ? 'checked' : '' }}
                                                   id="24">
                                            <label class="form-check-label" for="24">
                                                MY_DELIVERY
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="25" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[25] ? 'checked' : '' }}
                                                   id="25">
                                            <label class="form-check-label" for="25">
                                                SET_DELIVERY
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="26" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[26] ? 'checked' : '' }}
                                                   id="26">
                                            <label class="form-check-label" for="26">
                                                EXPORT_EXCEL
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="border mb-1 p-2">
                            <table class="table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input name="27" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[27] ? 'checked' : '' }}
                                                   id="27">
                                            <label class="form-check-label" for="27">
                                                Create
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="28" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[28] ? 'checked' : '' }}
                                                   id="28">
                                            <label class="form-check-label" for="28">
                                                Read
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ml-2 form-check">
                                            <input name="29" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[29] ? 'checked' : '' }}
                                                   id="29">
                                            <label class="form-check-label" for="29">
                                                Read All
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="30" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[30] ? 'checked' : '' }}
                                                   id="30">
                                            <label class="form-check-label" for="30">
                                                Update
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check ml-2">
                                            <input name="31" class="form-check-input" type="checkbox" value=""
                                                   {{ $list[31] ? 'checked' : '' }}
                                                   id="31">
                                            <label class="form-check-label" for="31">
                                                Delete
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="mt-4 btn btn-primary">Save</button>
                    </form>
            </div>
        </div>


    </div>

@endsection
