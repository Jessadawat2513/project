<?php
    session_start();
    
    include '..\libraries\classlink.php';
    
    $UserLogin = new UserLogin();
    
    $UserLogin->EncodeData($_SESSION["login_session"]);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="../dist/img/logo.png" alt="ASP Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Asset Manager</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">                                               
                <img src="../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><!--Alexander Pierce--><?php print $UserLogin->getUserName(); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!--<li class="nav-item">
                <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
                </a>                         
                </li>-->

                <li class="nav-item">
                    <a href="equipment.php" class="nav-link" id="equipmentlink">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            รายการอุปกรณ์
                        </p>
                    </a>    

                </li>

                <!--<li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Time Attendance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="leave.php" class="nav-link" id="leavelink">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leave</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="overtime.php" class="nav-link" id="overtimelink">
                                <i class="far fa-circle nav-icon"></i>
                                <p>OverTime</p>
                            </a>
                        </li>
                    </ul>
                </li>-->

                <li class="nav-item">
                    <a href="../controller/logoutcontroller.php" class="nav-link" id="logoutlink">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>    

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
            </aside>
