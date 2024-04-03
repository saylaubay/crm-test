<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Custom fonts for this template-->
    <link href="/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>

            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Pages Collapse Menu -->
        @isShow(["USER_READ_ALL","USER_CREATE"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                </a>
                <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("USER_READ_ALL")
                        <a class="collapse-item" href="{{ route('users.index') }}">All user</a>
                        @endcheck
                        @check("USER_CREATE")
                        <a class="collapse-item" href="{{ route('users.create') }}">Add new user</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow
{{--        @endif--}}

        @isShow(["CATEGORY_READ_ALL","CATEGORY_CREATE"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-th-large"></i>
                    <span>Categories</span>
                </a>
                <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("CATEGORY_READ_ALL")
                        <a class="collapse-item" href="{{ route('categories.index') }}">All category</a>
                        @endcheck
                        @check("CATEGORY_CREATE")
                        <a class="collapse-item" href="{{ route('categories.create') }}">Add new category</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow

        @isShow(["PRODUCT_READ_ALL","PRODUCT_CREATE"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-cube"></i>
                    <span>Products</span>
                </a>
                <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("PRODUCT_READ_ALL")
                        <a class="collapse-item" href=" {{ route('products.index') }} ">All product</a>
                        @endcheck
                        @check("PRODUCT_CREATE")
                        <a class="collapse-item" href=" {{ route('products.create') }} ">Add new product</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow

        @isShow(["ORDER_READ_ALL","ORDER_CREATE"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Order</span>
                </a>
                <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("ORDER_READ_ALL")
                        <a class="collapse-item" href="{{ route('orders.index') }}">All order</a>
                        @endcheck
                        @check("ORDER_CREATE")
                        <a class="collapse-item" href="{{ route('orders.create') }}">Add new order</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow

        @isShow(["ROLE_READ_ALL","ROLE_CREATE"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsRole"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-chevron-circle-right"></i>
                    <span>Role</span>
                </a>
                <div id="collapsRole" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("ROLE_READ_ALL")
                        <a class="collapse-item" href="{{ route('roles.index') }}">All role</a>
                        @endcheck
                        @check("ROLE_CREATE")
                        <a class="collapse-item" href="{{ route('roles.create') }}">Add new role</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow

        @isShow(["MY_DELIVERY","MY_DELIVERED","MY_UNDELIVERED"])
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsMyDeliveries"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-truck"></i>
                    <span>My deliveries</span>
                </a>
                <div id="collapsMyDeliveries" class="collapse" aria-labelledby="headingTwo"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        @check("MY_DELIVERY")
                        <a class="collapse-item" href="{{ route('mydelivery') }}">All delivery</a>
                        @endcheck
                        @check("MY_DELIVERED")
                        <a class="collapse-item" href="{{ route('myDelivered') }}">Delivered</a>
                        @endcheck
                        @check("MY_UNDELIVERED")
                        <a class="collapse-item" href="{{ route('myUndelivered') }}">Undelivered</a>
                        @endcheck
                    </div>
                </div>
            </li>
        @endisShow

    <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span
                                class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->first_name }}</span>
                            <img class="img-profile rounded-circle"
                                 src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('logout') }}" class="ml-5" method="post">
                                @csrf
                                <button type="submit">LOGOUT</button>

                            </form>

                        </div>
                    </li>

                </ul>

            </nav>


            @yield('content')


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/public/vendor/jquery/jquery.min.js"></script>
    <script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/public/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/public/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/public/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/public/js/demo/chart-area-demo.js"></script>
    <script src="/public/js/demo/chart-pie-demo.js"></script>

</body>

</html>
