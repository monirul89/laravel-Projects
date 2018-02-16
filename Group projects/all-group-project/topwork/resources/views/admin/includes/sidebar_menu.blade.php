
<aside>
    <div id="sidebar"  class="nav-collapse sidebar">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="sub-menu">
                <a class="" href="{{route('home')}}">
                    <i class="fa fa-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-building-o"></i>
                    <span class="text">Applicant Resume</span>
                    <span class="drop-arrow fa fa-arrows-v"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('add-resume')}}">Add Resume</a></li>
                    <li><a class="" href="{{route('update-resume',['id'=> Auth::user()->id ])}}">Edit Profile</a></li>
                </ul>
            </li>


            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-building-o"></i>
                    <span class="text">Services</span>
                    <span class="drop-arrow fa fa-arrows-v"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('new-job')}}"> Add Job </a></li>
                    <li><a class="" href="{{route('browse-resume')}}"> Browse Resume</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-building-o"></i>
                    <span class="text">Manage</span>
                    <span class="drop-arrow fa fa-arrows-v"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('manage-job')}}"> Manage Job </a></li>
                    <li><a class="" href="{{route('manage-resume')}}"> Manage Resume </a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="fa fa-building-o"></i>
                    <span class="text">Slider</span>
                    <span class="drop-arrow fa fa-arrows-v"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('add-slider')}}">Add Slider</a></li>
                    <li><a class="" href="{{route('manage-slider')}}">Manage Slider</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>