<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- Dashboard --}}
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
    
                {{-- Home Slide --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Slide Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
                    </ul>
                </li>
    
                {{-- About --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page') }}">About Page</a></li>
                        <li><a href="{{ route('about.multi.image') }}">Add Multi Image</a></li>
                        <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
                        <li><a href="{{ route('resume') }}">My Resume</a></li>
                        <li><a href="{{ route('education.index') }}">Education</a></li>
                    </ul>
                </li>
    
                {{-- Portfolio --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Portfolio Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                        <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
                    </ul>
                </li>

                {{-- My Contact --}}
                <li>
                    <a href="{{ route('index.mycontact') }}">
                        <i class="ri-mail-send-line"></i>
                        <span>My Contact</span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>

                {{-- Blog Category --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                    </ul>
                </li>

                {{-- Blog --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Blog Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                        <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                    </ul>
                </li>

                {{-- Footer Setup --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Footer Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                    </ul>
                </li>

                {{-- Contact Message --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Contact Message</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.message') }}">All Message</a></li>
                    </ul>
                </li>

                {{-- Multi Image --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Multi Image</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Add Multi Image</a></li>
                        <li><a href="#">All Multi Image</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>