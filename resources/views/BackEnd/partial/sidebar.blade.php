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

                        
                        <li>
                            
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-user"></span> <span class="mini-click-non">Seeker</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Seeker 1</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Seeker 2</span></a></li>
                            </ul>
                        </li>

                        @if(Auth::user()->role_id==1)
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="fa fa-cog"></span> <span class="mini-click-non">Setting</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('admin.division')}}"><span class="mini-sub-pro">Division</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.jobcategory')}}"><span class="mini-sub-pro">Job Category</span></a></li>
                                <li><a title="Add Courses" href="{{route('admin.subcategory')}}"><span class="mini-sub-pro">Sub Category</span></a></li>
                            </ul>
                        </li>

                            @else
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><span class="fa fa-cog"></span> <span class="mini-click-non">Jobs</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="" href="{{route('provider.jpPost')}}"><span class="mini-sub-pro">Jobs Lists</span></a></li>
                                    <li><a title="" href="{{route('provider.jpPostCreate')}}"><span class="mini-sub-pro">Add Jobs</span></a></li>
                                    
                                </ul>
                            </li>

                        @endif
                    </ul>
                </nav>
            </div>
        </nav>
    </div>