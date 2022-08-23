@extends('layouts.layout')
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('user.pages.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="las la-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    @include('user.pages.search')

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        @include('user.pages.alerts')

                        <!-- Nav Item - Messages -->
                        @include('user.pages.messages')

                        <!-- Nav Item - User Information -->
                        @include('user.pages.profile')

                    </ul>
                    <!-- Topbar Navbar end  -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <button type="button" class="btn btn-primary">
                        TOTAL EMPLOYEES: <span class="badge bg-danger">{{ $employees->count() }}</span>
                    </button>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <h6 class="h3 mb-0 text-gray-800">
                            

                        </h6>

                        <h1 class="h3 mb-0 text-gray-800">
                            
                            @if (Auth::user()->id == $attendence->first()->user_id && !$attendence->count() > 0)
                                <div class="d-flex p-2 bd-highlight justify-content-center">
                                    @include('form.userintime')

                                </div>
                            @else
                                @if (Auth::user()->id == $attendence->first()->user_id && !$attendence->first()->status == 1)
                                    <div class="d-flex p-2 bd-highlight justify-content-center">
                                        @include('form.userouttime')
                                    </div>
                                @else
                                    <div class="d-flex p-2 bd-highlight justify-content-center">
                                        @include('form.userintime')

                                    </div>
                                @endif
                            @endif
                        </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        @include('user.pages.content')
                    </div>

                    <!-- Content Row  -->

                    <div class="row">

                        <!-- Area Chart -->
                        @include('user.pages.areaChart')

                        <!-- Pie Chart -->
                        @include('user.pages.pieChart')
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            @include('user.pages.projects')

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            @include('user.pages.illstrations')

                            <!-- Approach -->
                            @include('user.pages.approach')

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
@endsection
