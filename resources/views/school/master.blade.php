<!DOCTYPE html>
<html>
<head>
    @include('school.block.head')
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('school.block.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('school.block.aside')
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('school.block.header')

            <!-- Main content -->
            <section class="content">
                
                @yield('content')
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->
        @include('school.block.footer')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('school.block.foot')
    @yield('script')
</body>
</html>