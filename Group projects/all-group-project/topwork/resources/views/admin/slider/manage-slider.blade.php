<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top work || Manage Slider</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('/')}}admin/css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="{{asset('/')}}admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/jsdatatable.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('/')}}admin/css/animate.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('/')}}admin/js/html5shiv.js"></script>
    <script src="{{asset('/')}}admin/js/respond.min.js"></script>
    <script src="{{asset('/')}}admin/js/lte-ie7.js"></script>
    <![endif]-->

</head>

<body>

<!-- container section start -->
<section id="container" class="">
    <!--header start-->
    @include('admin.includes.header')
    <!--header end-->

    <!--sidebar start-->
    @include('admin.includes.sidebar_menu')
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class=" wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> <span>Manage Slider</span></h3>
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
                <div class="col-md-12">
                    <section class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Manage Slider</h2>
                        </div>
                        <div class="panel-body">
                            <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012/12/02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012/08/06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010/10/14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009/09/15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008/12/13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008/12/19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013/03/03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008/10/16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012/12/18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010/03/17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012/11/27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010/06/09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009/04/10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012/10/13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012/09/26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011/09/03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009/06/25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011/12/12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>23</td>
                                    <td>2010/09/20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009/10/09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010/12/22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010/11/14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011/06/07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010/03/11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011/08/14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sidney</td>
                                    <td>37</td>
                                    <td>2011/06/02</td>
                                    <td>$95,400</td>
                                </tr>
                                <tr>
                                    <td>Suki Burks</td>
                                    <td>Developer</td>
                                    <td>London</td>
                                    <td>53</td>
                                    <td>2009/10/22</td>
                                    <td>$114,500</td>
                                </tr>
                                <tr>
                                    <td>Prescott Bartlett</td>
                                    <td>Technical Author</td>
                                    <td>London</td>
                                    <td>27</td>
                                    <td>2011/05/07</td>
                                    <td>$145,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Cortez</td>
                                    <td>Team Leader</td>
                                    <td>San Francisco</td>
                                    <td>22</td>
                                    <td>2008/10/26</td>
                                    <td>$235,500</td>
                                </tr>
                                <tr>
                                    <td>Martena Mccray</td>
                                    <td>Post-Sales support</td>
                                    <td>Edinburgh</td>
                                    <td>46</td>
                                    <td>2011/03/09</td>
                                    <td>$324,050</td>
                                </tr>
                                <tr>
                                    <td>Unity Butler</td>
                                    <td>Marketing Designer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/12/09</td>
                                    <td>$85,675</td>
                                </tr>
                                <tr>
                                    <td>Howard Hatfield</td>
                                    <td>Office Manager</td>
                                    <td>San Francisco</td>
                                    <td>51</td>
                                    <td>2008/12/16</td>
                                    <td>$164,500</td>
                                </tr>
                                <tr>
                                    <td>Hope Fuentes</td>
                                    <td>Secretary</td>
                                    <td>San Francisco</td>
                                    <td>41</td>
                                    <td>2010/02/12</td>
                                    <td>$109,850</td>
                                </tr>
                                <tr>
                                    <td>Vivian Harrell</td>
                                    <td>Financial Controller</td>
                                    <td>San Francisco</td>
                                    <td>62</td>
                                    <td>2009/02/14</td>
                                    <td>$452,500</td>
                                </tr>
                                <tr>
                                    <td>Timothy Mooney</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>37</td>
                                    <td>2008/12/11</td>
                                    <td>$136,200</td>
                                </tr>
                                <tr>
                                    <td>Jackson Bradshaw</td>
                                    <td>Director</td>
                                    <td>New York</td>
                                    <td>65</td>
                                    <td>2008/09/26</td>
                                    <td>$645,750</td>
                                </tr>
                                <tr>
                                    <td>Olivia Liang</td>
                                    <td>Support Engineer</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2011/02/03</td>
                                    <td>$234,500</td>
                                </tr>
                                <tr>
                                    <td>Bruno Nash</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>38</td>
                                    <td>2011/05/03</td>
                                    <td>$163,500</td>
                                </tr>
                                <tr>
                                    <td>Sakura Yamamoto</td>
                                    <td>Support Engineer</td>
                                    <td>Tokyo</td>
                                    <td>37</td>
                                    <td>2009/08/19</td>
                                    <td>$139,575</td>
                                </tr>
                                <tr>
                                    <td>Thor Walton</td>
                                    <td>Developer</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2013/08/11</td>
                                    <td>$98,540</td>
                                </tr>
                                <tr>
                                    <td>Finn Camacho</td>
                                    <td>Support Engineer</td>
                                    <td>San Francisco</td>
                                    <td>47</td>
                                    <td>2009/07/07</td>
                                    <td>$87,500</td>
                                </tr>
                                <tr>
                                    <td>Serge Baldwin</td>
                                    <td>Data Coordinator</td>
                                    <td>Singapore</td>
                                    <td>64</td>
                                    <td>2012/04/09</td>
                                    <td>$138,575</td>
                                </tr>
                                <tr>
                                    <td>Zenaida Frank</td>
                                    <td>Software Engineer</td>
                                    <td>New York</td>
                                    <td>63</td>
                                    <td>2010/01/04</td>
                                    <td>$125,250</td>
                                </tr>
                                <tr>
                                    <td>Zorita Serrano</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>56</td>
                                    <td>2012/06/01</td>
                                    <td>$115,000</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Acosta</td>
                                    <td>Junior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>43</td>
                                    <td>2013/02/01</td>
                                    <td>$75,650</td>
                                </tr>
                                <tr>
                                    <td>Cara Stevens</td>
                                    <td>Sales Assistant</td>
                                    <td>New York</td>
                                    <td>46</td>
                                    <td>2011/12/06</td>
                                    <td>$145,600</td>
                                </tr>
                                <tr>
                                    <td>Hermione Butler</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2011/03/21</td>
                                    <td>$356,250</td>
                                </tr>
                                <tr>
                                    <td>Lael Greer</td>
                                    <td>Systems Administrator</td>
                                    <td>London</td>
                                    <td>21</td>
                                    <td>2009/02/27</td>
                                    <td>$103,500</td>
                                </tr>
                                <tr>
                                    <td>Jonas Alexander</td>
                                    <td>Developer</td>
                                    <td>San Francisco</td>
                                    <td>30</td>
                                    <td>2010/07/14</td>
                                    <td>$86,500</td>
                                </tr>
                                <tr>
                                    <td>Shad Decker</td>
                                    <td>Regional Director</td>
                                    <td>Edinburgh</td>
                                    <td>51</td>
                                    <td>2008/11/13</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
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
    <!--main content end-->
</section>
<!-- container section end -->

<!-- javascripts -->
<script src="{{asset('/')}}admin/js/jquery.js"></script>
<script src="{{asset('/')}}admin/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{asset('/')}}admin/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('/')}}admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('/')}}admin/js/jsdatatable.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "full_numbers"
        });
    });
</script>
<script src="{{asset('/')}}admin/js/jquery.sparkline.js"></script>
<script type="text/javascript">
    $(".colorbox span").click(function(){
        $(".colors").toggleClass("colorright");
    });
    function color(col){
        $("#header").css("background-color", col);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseover(
            function () {
                $(this).css("background-color",col);
            }
        );
    }
    function color1(cols){
        $("#sidebar").css("background-color", cols);
        $(".sidebar-menu li a").css("background-color", cols);
        $(".sidebar-menu .sub li a").css("background-color", cols);
        $('.sidebar-menu li a, .sidebar-menu .sub li a ').mouseout(
            function () {
                $(this).css("background-color",cols);
            }
        );
    }

</script>

<!--custome script for all page-->
<script src="{{asset('/')}}admin/js/scripts.js"></script>

</body>
</html>
