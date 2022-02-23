<aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <div class="user-profile">
                <div class="ulogo">
                    <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                        <div class="d-flex align-items-center justify-content-center">
                            <img src={{asset("backend/images/logo-dark.png")}} alt="">
                            <h3><b>Mahadia</b> Admin</h3>
                        </div>
                    </a>
                </div>
            </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="active">
            <a href="{{route("dashboard")}}">
                <i data-feather="pie-chart"></i>
                <span>Dashboard</span>
            </a>
            </li>

            <li class="treeview">
            <a href="#">
                <i class="fa fa-user-o"></i>
                <span>Manage User</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route("user.show_create_form")}}"><i class="ti-more"></i>Add User</a></li>
                <li><a href="{{route('user.view')}}"><i class="ti-more"></i>Users</a></li>
                <li><a href="{{route("user_student.view")}}"><i class="ti-more"></i>Students</a></li>
            </ul>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-user-circle"></i>
                <span>Manage Profile</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route("user.profile")}}"><i class="ti-more"></i>Your Profile</a></li>
                <li><a href="{{route('user.reset_password')}}"><i class="ti-more"></i>Change Password</a></li>
            </ul>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-bank"></i>
                <span>Manage Setup</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('student.view')}}"><i class="ti-more"></i>Student Classes</a></li>
                <li><a href="{{route('student_year.view')}}"><i class="ti-more"></i>Student Years</a></li>
                <li><a href="{{route('student_group.view')}}"><i class="ti-more"></i>Student Groups</a></li>
                <li><a href="{{route('student_shift.view')}}"><i class="ti-more"></i>Student Shifts</a></li>
                <li><a href="{{route('fee_category.view')}}"><i class="ti-more"></i>Fee Category</a></li>
                <li><a href="{{route('fee_category_amount.view')}}"><i class="ti-more"></i>Fee Category Amount</a></li>
                <li><a href="{{route('exam_type.view')}}"><i class="ti-more"></i>Exam Types</a></li>
                <li><a href="{{route('student_subject.view')}}"><i class="ti-more"></i>Student Subjects</a></li>
                <li><a href="{{route('assign_subject.view')}}"><i class="ti-more"></i>Assign Subject</a></li>
                <li><a href="{{route('designation.view')}}"><i class="ti-more"></i>Designations</a></li>
            </ul>
            </li>
            <li class="treeview">
            <a href="#">
                <i class="fa fa-bank"></i>
                <span>Manage Student</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('assign_student.view')}}"><i class="ti-more"></i>Assign Student</a></li>
            </ul>
            </li>
        </ul>
        </section>

        <div class="sidebar-footer">
            <!-- item-->
            <a href="/" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
            <!-- item-->
            <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
        </div>
    </aside>
