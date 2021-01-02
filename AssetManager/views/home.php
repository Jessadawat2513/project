<?PHP
    session_start();
    include '..\libraries\library.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ASP HRM | Home</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel='icon' href='favicon.ico' type='image/x-icon' sizes="16x16" />
    </head>
    <body class="hold-transition sidebar-mini layout-fixed text-sm">
        <div class="wrapper">
            <div class="header-wrapper">
                <!-- Navbar -->
                <?php
                    include '../modal/header-menu-wrapper.php';
                ?>
            </div>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <?php
                include '../modal/aside-menu-wrapper.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">

                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section id ="container" class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="bodycontent" class="col-12">
                                <?php
                                    //include 'views/employeesviews.php';
                                ?>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <?php
                    include '../modal/footer-wrapper.php';
                ?>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

    </body>
</html>
