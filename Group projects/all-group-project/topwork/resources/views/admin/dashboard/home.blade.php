@extends('admin.master');

@section('title')
    Dashboard
@endsection

@section('body')
    <section id="main-content">
        <section class=" wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> <span>Dashboard</span></h3>
                    <!--colorbox end-->
                    <div class="colorbox">
                        <span><i class="fa fa-gear"></i></span>
                        <div class="colors">
                            <p>Header Style</p>
                            <a class="colorholder" style="background: #36424A;" onclick="color('#36424A')"></a>
                            <a class="colorholder" style="background: #a8092c;" onclick="color('#a8092c')"></a>
                            <a class="colorholder m-n" style="background: #0c4063;" onclick="color('#0c4063')"></a>
                            <a class="colorholder" style="background: #505254;" onclick="color('#505254')"></a>
                            <a class="colorholder" style="background: #8c1eb3;" onclick="color('#8c1eb3')"></a>
                            <a class="colorholder m-n" style="background: #9f571b;" onclick="color('#9f571b')"></a>
                            <a class="colorholder" style="background: #a3242a;" onclick="color('#a3242a')"></a>
                            <a class="colorholder m-n" style="background: #293a2e;" onclick="color('#293a2e')"></a>
                            <p class="pt-16">Sidebar Style</p>
                            <a class="colorholder" style="background: #394a59;" onclick="color1('#394a59')"></a>
                            <a class="colorholder" style="background: #d80b39;" onclick="color1('#d80b39')"></a>
                            <a class="colorholder m-n" style="background: #105684;" onclick="color1('#105684')"></a>
                            <a class="colorholder" style="background: #5c5e60;" onclick="color1('#5c5e60')"></a>
                            <a class="colorholder" style="background: #9c22c7;" onclick="color1('#9c22c7')"></a>
                            <a class="colorholder m-n" style="background: #c76d22;" onclick="color1('#c76d22')"></a>
                            <a class="colorholder" style="background: #d22e36;" onclick="color1('#d22e36')"></a>
                            <a class="colorholder m-n" style="background: #3e4d42;" onclick="color1('#3e4d42')"></a>
                        </div>
                    </div>
                    <!--colorbox end-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="tiles-sm purple-bg">
                        <i class="fa fa-cubes"></i>
                        <h4>12</h4>
                    </div><!--/.tiles-->
                    <div class="tiles-xs dark-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h4>17</h4>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="tiles-sm crimson-bg">
                        <i class="fa fa-exclamation-triangle"></i>
                        <h4>12</h4>
                    </div><!--/.tiles-->
                    <div class="tiles-xs orange-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h4>36</h4>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="tiles-sm gray-bg">
                        <i class="fa fa-envelope-open"></i>
                        <h4>12</h4>
                    </div><!--/.tiles-->
                    <div class="tiles-xs pink-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h4>22</h4>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="tiles-sm teal-bg">
                        <i class="fa fa-close"></i>
                        <h4>98</h4>
                    </div><!--/.tiles-->
                    <div class="tiles-xs teal-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h4>12</h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="tiles-lg green-bg">
                        <span class="icon"><i class="fa fa-bell fa-4x"></i></span>
                        <h1 class="m-xs">47</h1>
                        <h4 class="font-bold no-margins pb-8">
                            Notification
                        </h4>
                    </div><!--/.tiles-->
                </div>
            </div><!--/.row-->

            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <section class="panel panel-default alt">
                        <div class="panel-heading">
                            <h2>Statistics</h2>
                            <div class="panel-options">
                                <div class="btn-group">
                                    <a class="btn btn-success relod"><i class="fa fa-rotate-right"></i></a>
                                    <a class="btn btn-success btn-setting"><i class="fa fa-ils"></i></a>
                                    <a class="btn btn-success del"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body btn-setting del relod">
                            <div class="table-responsive">
                                <table class="table table-striped table-advance table-hover">
                                    <tbody>
                                    <tr>
                                        <th><i class="icon_profile"></i> Full Name</th>
                                        <th><i class="icon_calendar"></i> Date</th>
                                        <th><i class="icon_mail_alt"></i> Email</th>
                                        <th><i class="icon_pin_alt"></i> City</th>
                                        <th><i class="icon_mobile"></i> Mobile</th>
                                        <th><i class="icon_cogs"></i> Action</th>
                                    </tr>
                                    <tr>
                                        <td>Angeline Mcclain</td>
                                        <td>2004-07-06</td>
                                        <td>dale@chief.info</td>
                                        <td>Rosser</td>
                                        <td>176-026-5992</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sung Carlson</td>
                                        <td>2011-01-10</td>
                                        <td>ione.gisela@high.org</td>
                                        <td>Robert Lee</td>
                                        <td>724-639-4784</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bryon Osborne</td>
                                        <td>2006-10-29</td>
                                        <td>sol.raleigh@language.edu</td>
                                        <td>York</td>
                                        <td>180-456-0056</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dalia Marquez</td>
                                        <td>2011-12-15</td>
                                        <td>angeline.frieda@thick.com</td>
                                        <td>Alton</td>
                                        <td>690-601-1922</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Selina Fitzgerald</td>
                                        <td>2003-01-06</td>
                                        <td>moshe.mikel@parcelpart.info</td>
                                        <td>Waelder</td>
                                        <td>922-810-0915</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Abraham Avery</td>
                                        <td>2006-07-14</td>
                                        <td>harvey.jared@pullpump.org</td>
                                        <td>Harker Heights</td>
                                        <td>511-175-7115</td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-3">
                    <!-- <ul class="today-datas">
                        <li>
                            <div><span id="todayspark1" class="spark"></span></div>
                            <div class="datas-text">11,500 visitors/day</div>
                        </li>
                        <li>
                            <div><span id="todayspark2" class="spark"></span></div>
                            <div class="datas-text">15,000 Pageviews</div>
                        </li>
                        <li>
                            <div><span id="todayspark3" class="spark"></span></div>
                            <div class="datas-text">30.55% Bounce Rate</div>
                        </li>
                        <li>
                            <div><span id="todayspark4" class="spark"></span></div>
                            <div class="datas-text">$16,00 Revenue/Day</div>
                        </li>
                        <li>
                            <div><span id="todayspark5" class="spark"></span></div>
                            <div class="datas-text">12,000000 visitors every Month</div>
                        </li>
                    </ul> -->
                    <!-- Widget -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Message</h2>
                        </div>

                        <div class="panel-body">
                            <!-- Widget content -->
                            <div class="padd sscroll">
                                <ul class="chats">
                                    <!-- Chat by us. Use the class "by-me". -->
                                    <li class="by-me">
                                        <!-- Use the class "pull-left" in avatar -->
                                        <div class="avatar pull-left">
                                            <img src="{{asset('/')}}admin/img/user.jpg" alt=""/>
                                        </div>

                                        <div class="chat-content">
                                            <!-- In meta area, first include "name" and then "time" -->
                                            <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                                            Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>

                                    <!-- Chat by other. Use the class "by-other". -->
                                    <li class="by-other">
                                        <!-- Use the class "pull-right" in avatar -->
                                        <div class="avatar pull-right">
                                            <img src="{{asset('/')}}admin/img/user22.png" alt=""/>
                                        </div>

                                        <div class="chat-content">
                                            <!-- In the chat meta, first include "time" then "name" -->
                                            <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                                            Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>

                                    <li class="by-me">
                                        <div class="avatar pull-left">
                                            <img src="{{asset('/')}}admin/img/user.jpg" alt=""/>
                                        </div>

                                        <div class="chat-content">
                                            <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                                            Vivamus diam elit diam
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Widget footer -->
                            <div class="widget-foot">
                                <div class="input-group">
                                    <input id="email" class="form-control" name="email" placeholder="Email" type="text">
                                    <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <section class="panel panel-inverse-color">
                        <div class="panel-heading">
                            <h2>Sales Info</h2>
                            <div class="panel-options">
                                <input class="form-control round-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="chartdiv" style="width:100%; height:400px;"></div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <section class="panel panel-info-color">
                        <div class="panel-heading">
                            <h2>Sales Rate</h2>
                        </div>
                        <div class="panel-body text-center">
                            <div id="dash-bar"></div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Sales Average</h2>
                        </div>
                        <div class="panel-body text-center">
                            <canvas id="dash-line" height="200" width="auto"></canvas>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Top Sales</h2>
                        </div>
                        <div class="panel-body text-center">
                            <div id="dash-pie"></div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <section class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Basic Project</h2>
                        </div>
                        <div class="panel-body">
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Design
                                </div>
                                <div class="pull-right">90%</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Income
                                </div>
                                <div class="pull-right">60%</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Economy
                                </div>
                                <div class="pull-right">40%</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Fund
                                </div>
                                <div class="pull-right">20%</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Style
                                </div>
                                <div class="pull-right">60%</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                            <div class="clearfix pb-8" style="font-weight: bold;">
                                <div class="pull-left">
                                    Project
                                </div>
                                <div class="pull-right">70%</div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-success" style="width: 35%">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%">
                                    <span class="sr-only">20% Complete (warning)</span>
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class="sr-only">10% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-orange-color">
                        <div class="panel-heading">
                            <h2>Active Users</h2>
                        </div>
                        <div class="panel-body p-n">
                            <div class="profile-data">
                                <div class="media p-16">
                                    <div class="media-left">
                                        <div class="img-container">
                                            <img src="{{asset('/')}}admin/img/pic1.png" class="img-circle media-object" height="60" width="60">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Lorem ipsum dolor sit</h5>
                                        <span class="status">visibility</span>
                                        <span class="online media-green"></span>
                                    </div>
                                </div>
                                <div class="media p-16 m-n">
                                    <div class="media-left">
                                        <div class="img-container">
                                            <img src="{{asset('/')}}admin/img/mail-avatar.jpg" class="img-circle media-object" height="60" width="60">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Lorem ipsum dolor sit</h5>
                                        <span class="status">visibility</span>
                                        <span class="online media-red"></span>
                                    </div>
                                </div>
                                <div class="media p-16 m-n">
                                    <div class="media-left">
                                        <div class="img-container">
                                            <img src="{{asset('/')}}admin/img/friends/fr-06.jpg" class="img-circle media-object" height="60" width="60">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Lorem ipsum dolor sit</h5>
                                        <span class="status">visibility</span>
                                        <span class="online media-green"></span>
                                    </div>
                                </div>
                                <div class="media p-16 m-n brb-n">
                                    <div class="media-left">
                                        <div class="img-container">
                                            <img src="{{asset('/')}}admin/img/friends/fr-10.jpg" class="img-circle media-object" height="60" width="60">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h5>Lorem ipsum dolor sit</h5>
                                        <span class="status">visibility</span>
                                        <span class="online media-orange"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="profile-data">
                            <div class="alert alert-success m-n">
                                <strong>Success!</strong>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error dolorem dolorum minima libero, officiis iure, ea.
                            </div>
                            <div class="p-16">
                                <table class="table table-hover m-n">
                                    <thead>
                                    <tr><th>Author</th>
                                        <th>View</th>
                                        <th>Status</th>
                                    </tr></thead>
                                    <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>@mdo</td>
                                        <td>
                                            <span title="Info" class="label label-info">request</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>@fat</td>
                                        <td>
                                            <span title="Info" class="label label-danger">dismiss</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thornton</td>
                                        <td>@smdo</td>
                                        <td>
                                            <span title="Info" class="label label-success">online</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Otto</td>
                                        <td>@ffat</td>
                                        <td>
                                            <span title="Info" class="label label-success">online</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ototo</td>
                                        <td>@ffat0</td>
                                        <td>
                                            <span title="Info" class="label label-warning">pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ridley</td>
                                        <td>@ffssat0</td>
                                        <td>
                                            <span title="Info" class="label label-primary">friend</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rickie</td>
                                        <td>@ffhsaat0</td>
                                        <td>
                                            <span title="Info" class="label label-primary">dost</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Available.
                </div>
                <div>
                    <strong>Copyright</strong> Company &copy; 2017
                </div>
            </div>
        </section>
    </section>

    <div class="rightbar">
        <div id="rightbar">
            <!--rightbar start-->
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#right-media">
                        <!-- <i class="fa fa-home"></i> -->
                        <span>Media</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#right-develop">
                        <!-- <i class="fa fa-user"></i> -->
                        <span>Progress</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#right-chart">
                        <!-- <i class="fa fa-user"></i> -->
                        <span>Chart</span>
                    </a>
                </li>
            </ul>
            <ul class="tab-content">
                <li id="right-media" class="rightbar-develop tab-pane active">
                    <div class="right-header">
                        <h5>Rightbar Media</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="media">
                            <div class="media-left">
                                <button class="btn btn-info"><i class="fa fa-play"></i></button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> <div>John Doe</div> <small class="text-info"><i><b>Posted on Feb 19, 2016</b></i></small></h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <button class="btn btn-success"><i class="fa fa-chevron-circle-right"></i></button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> <div>John Doe</div> <small class="text-success"><i><b>Posted on Feb 19, 2016</b></i></small></h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> <div>John Doe</div> <small class="text-danger"><i><b>Posted on Feb 19, 2016</b></i></small></h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <button class="btn btn-warning"><i class="fa fa-stop-circle"></i></button>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"> <div>John Doe</div> <small class="text-warning"><i><b>Posted on Feb 19, 2016</b></i></small></h4>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-header">
                        <h5>Progress Bars</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Design PSD 90%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="right-develop" class="rightbar-develop tab-pane">
                    <div class="right-header">
                        <h5>Search</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="input-group pb-16">
                            <input id="email" class="form-control" name="email" placeholder="Email" type="text">
                            <span class="input-group-addon">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </div>
                    <div class="right-header">
                        <h5>Progress Bars</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Design PSD 90%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Project EM 30%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-ino" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Digital Marketing 80%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Logo Designing 78%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                <span class="sr-only">78% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Mobile App 50%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                <span class="sr-only">50% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="right-chart" class="rightbar-develop tab-pane">
                    <div class="right-header">
                        <h5>Sparklines</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="sparkline">
                            <div class="info">
                                <span class="title">Orders</span>
                                <span class="text">7,504</span>
                            </div>
                            <div class="charts">
                                <div id="rightbar-line"></div>
                            </div>
                        </div>
                        <div class="sparkline">
                            <div class="info">
                                <span class="title">Orders</span>
                                <span class="text">7,504</span>
                            </div>
                            <div class="charts">
                                <div id="rightbar-bar"></div>
                            </div>
                        </div>
                        <div class="sparkline">
                            <div class="info">
                                <span class="title">Orders</span>
                                <span class="text">7,504</span>
                            </div>
                            <div class="charts">
                                <div id="rightbar-pie"></div>
                            </div>
                        </div>
                    </div>
                    <div class="right-header">
                        <h5>Progress Bars</h5>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Design PSD 90%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="sr-only">90% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Project EM 30%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-ino" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightbar-info">
                        <div class="task-info">
                            <div class="desc"><b>Digital Marketing 80%</b></div>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection


