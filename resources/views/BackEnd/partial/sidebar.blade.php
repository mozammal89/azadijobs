<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       
                        <!-- <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All Professors</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>                              
                            </ul>
                        </li> -->

                        
                        <!-- <li>                           
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-user"></span> <span class="mini-click-non">Seeker</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Seeker 1</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Seeker 2</span></a></li>
                            </ul>
                        </li> -->

                        @if(Auth::user()->role_id==1)
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fas fa-briefcase"></span> <span class="mini-click-non">Govt Jobs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.govtJobsCreate')}}"><span class="mini-sub-pro">Add Govt Jobs</span></a></li>
                                <li><a title="All Courses" href="{{route('admin.govtJobs')}}"><span class="mini-sub-pro">Govt Jobs List</span></a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fas fa-diagnoses"></span> <span class="mini-click-non">Employees</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.employeeCreate')}}"><span class="mini-sub-pro">Add Employee</span></a></li>
                                <li><a title="All Courses" href="{{route('admin.employee')}}"><span class="mini-sub-pro">Employee List</span></a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fas fa-chalkboard-teacher"></span> <span class="mini-click-non">Training</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.trainingCreate')}}"><span class="mini-sub-pro">Add Training</span></a></li>
                                <li><a title="All Courses" href="{{route('admin.training')}}"><span class="mini-sub-pro">Training List</span></a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-tasks"></span> <span class="mini-click-non">Course Outline</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.trainingCourseOutlineCreate')}}"><span class="mini-sub-pro">Add Course Outline</span></a></li>
                                <li><a title="All Courses" href="{{route('admin.trainingCourseOutline')}}"><span class="mini-sub-pro">Course Outline List</span></a></li>                                
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.adsManagement')}}" ><span class="fas fa-ad"></span> <span class="mini-click-non">Ads Management</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-cog"></span> <span class="mini-click-non">Setting</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.division')}}"><span class="mini-sub-pro">Division</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.jobcategory')}}"><span class="mini-sub-pro">Job Category</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.subcategory')}}"><span class="mini-sub-pro">Sub Category</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.designation')}}"><span class="mini-sub-pro">Designation</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.department')}}"><span class="mini-sub-pro">Department</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.institute')}}"><span class="mini-sub-pro">Institute</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.district')}}"><span class="mini-sub-pro">District</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.notice')}}"><span class="mini-sub-pro">Notice</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.coverImage')}}"><span class="mini-sub-pro">Cover Image</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-cog"></span> <span class="mini-click-non">Footer</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    <a class="has-arrow" title="All Courses" href="all-courses.html"><span class="mini-sub-pro">About Us</span></a>
                                    <ul>
                                        <a href="{{route('admin.aboutUsTandC')}}">Terms & Conditions</a>
                                        <a href="{{route('admin.aboutUsFeedback')}}">Feedback</a>
                                        <a href="{{route('admin.aboutUsAboutUs')}}">About us</a>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" title="Add Courses" href="all-courses.html"><span class="mini-sub-pro">Job Seeker</span></a>
                                    <ul>
                                        <a href="">Create Account</a>
                                        <a href="">FAQ</a>
                                        <a href="">Terms & Conditions</a>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" title="Add Courses" href="all-courses.html"><span class="mini-sub-pro">Employeers</span></a>
                                    <ul>
                                        <a href="">Login</a>
                                        <a href="">Corporate Products/Services</a>
                                        <a href="">Contact</a>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a class="has-arrow" title="Add Courses" href="all-courses.html"><span class="mini-sub-pro">Tools & Social Media</span></a>
                                    <ul>
                                        <a href="">Facebook</a>
                                        <a href="">Twitter</a>
                                        <a href="">Google +</a>
                                    </ul>
                                </li> -->
                            </ul>
                        </li>

                            @else
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-cog"></span> <span class="mini-click-non">Jobs</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="" href="{{route('provider.jpPostCreate')}}"><span class="mini-sub-pro">Add Jobs</span></a></li>
                                    <li><a title="" href="{{route('provider.jpPost')}}"><span class="mini-sub-pro">Jobs Lists</span></a></li> 
                                </ul>
                            </li>

                        @endif
                    </ul>
                </nav>
            </div>
        </nav>
    </div>