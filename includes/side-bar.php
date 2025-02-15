<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="Dashboard.php" class="logo text-light">
               Grading System
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="Dashboard.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                    <h4 class="text-section">Components</h4>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-user-circle"></i>
                        <p>Students</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="students.php">
                                    <span class="sub-item">Student List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-book"></i>
                        <p>Subjects`</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="subjects.php">
                                    <span class="sub-item">Subject List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Departments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="department.php">
                                    <span class="sub-item">Department List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

              <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#teachers">
                        <i class="fas fa-users"></i>
                        <p>Teachers</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="teachers">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="teacher.php">
                                    <span class="sub-item">Teacher List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#course">
                        <i class="fas fa-users"></i>
                        <p>Course</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="course">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="course.php">
                                    <span class="sub-item">Course List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

               <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#enrollement">
                        <i class="fas fa-users"></i>
                        <p>Enrollement</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="enrollement">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="enrolled-list.php">
                                    <span class="sub-item">Entrolled List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->