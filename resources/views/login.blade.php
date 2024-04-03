<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

    <div class="row mt-5">
        <div class="col-lg-6" style="float: none; margin: 0 auto;">

            <div class="col-lg-3"></div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4 align-content-center  ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Login</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="phone">Phone</label>
                            <input required name="phone" type="text" id="phone" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input required name="password" type="password" id="password" class="form-control" />
                        </div>

                        <!-- Submit button -->
                        <button  type="submit" class="btn btn-primary btn-block mb-4">Login</button>

                    </form>

                </div>
            </div>


        </div>
    </div>



</div>




</body>
</html>
