<!-- ========== Left Sidebar Start ========== -->

<span class="mdi mdi-name"></span>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="index">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span>User Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('users.index') }}">User</a></li>
                        <li><a href="{{ route('roles.index') }}">Role Management</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-chat"></i>
                        <span>Subjects Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('subject.index') }}">My Subject</a></li>
                        <li><a href="msfilter">Message Filtering</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layer"></i>
                        <span>Calendar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="category">Main Calendar</a></li>
                        <li><a href="sub-category">Add Event</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-sign-text"></i>
                        <span>Post Manager</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tag">Post Tag</a></li>



                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->