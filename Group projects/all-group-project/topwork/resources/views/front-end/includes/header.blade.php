<!-- Header
    ================================================== -->
<header class="sticky-header">
    <div class="container">
        <div class="sixteen columns">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="{{route('/')}}"><img src="{{asset('/')}}front/images/logo.png" alt="Work Scout" /></a></h1>
            </div>

            <!-- Menu -->
            <nav id="navigation" class="menu">
                <ul id="responsive">

                    <li><a href="{{route('/')}}">Home</a></li>

                    <li><a href="#">For Candidates</a>
                        <ul>
                            <li><a href="{{route('browse-jobs')}}">Browse Jobs</a></li>
                            <li><a href="{{route('browse-categories')}}">Browse Categories</a></li>
                            <li><a href="{{route('add-resume')}}">Add Resume</a></li>
                            <li><a href="{{route('job-alerts')}}">Job Alerts</a></li>
                        </ul>
                    </li>

                    <li><a href="#">For Employers</a>
                        <ul>
                            <li><a href="{{route('add-job')}}">Add Job</a></li>
                            <li><a href="{{route('manage-applications')}}">Manage Applications</a></li>
                            <li><a href="{{route('browse-resumes')}}">Browse Resumes</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('blog-page')}}" id="current">Blog</a></li>

                </ul>


                <ul class="responsive float-right">
                    <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Create Account </a></li>
                    <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Log In</a></li>
                </ul>

            </nav>

            <!-- Navigation -->
            <div id="mobile-navigation">
                <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
            </div>

        </div>
    </div>
</header>