<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('customAdmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('customAdmin/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('customAdmin/css/custom.css') }}">
    @yield('singlePageStyle')

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-primary static-top" >

        <a class="navbar-brand mr-1" href="{{ route('admin.dashboard') }}">SMS</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

    <a href="{{ route('admin.logout') }}" class="btn btn-primary">LOGIN</a>
    </nav>

    <div class="row mr-0">
        <div class="col-2 leftMenu">
            @include('admin.inc.menu')
        </div>
        <div class="col-10">
            <div class="container">
                @include('admin.inc.message')
                @yield('content')
            </div>

        </div>
    </div>

    <!-- Sticky Footer -->
    <footer class="">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                {{-- <span>Copyright © Abdul Mabud 2019</span> --}}
            </div>
        </div>
    </footer>

    </div>
    <!-- /#wrapper -->

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
    <script src="{{ asset('customAdmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('customAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('customAdmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    {{-- <script src="{{ asset('customAdmin/vendor/chart.js/Chart.min.js') }}"></script> --}}
    <script src="{{ asset('customAdmin/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('customAdmin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('customAdmin/js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('customAdmin/js/demo/datatables-demo.js') }}"></script>
    {{-- <script src="{{ asset('customAdmin/js/demo/chart-area-demo.js') }}"></script> --}}
    <script src="{{ asset('customAdmin/js/custom.js') }}"></script>
    @yield('singlePageScript')

</body>

</html>
