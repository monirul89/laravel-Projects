@extends('front-end.master')

@section('title')
    View Jobs
    @endsection

@section('body')

    <!-- Titlebar
================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="ten columns">
                <span><a href="browse-jobs.html">Restaurant / Food Service</a></span>
                <h2>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h2>
            </div>

            <div class="six columns">
                <a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Job</a>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">

        <!-- Recent Jobs -->
        <div class="eleven columns">
            <div class="padding-right">

                <!-- Company Info -->
                <div class="company-info">
                    <img src="{{asset('/')}}front/images/job-list-logo-01.png" alt="">
                    <div class="content">
                        <h1>{{ $services->job_title }}</h1>
                        <span><a href="#"><i class="fa fa-link"></i> {{ $services->company_name }}</a></span>
                        <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <p class="margin-reset"><strong> Last Education Qulification : </strong> {{ $services->last_education }}</p>
                <p class="margin-reset"><strong> Experience : </strong> {{ $services->experience }}</p>
                <p class="margin-reset"><strong> Salary Range : </strong> {{ $services->salary_range }}</p>

                <br>
                <h3>Responsibilities that include:</h3>

                <p>{!! $services->job_description !!}</p>

            </div>
        </div>


        <!-- Widgets -->
        <div class="five columns">

            <!-- Sort by -->
            <div class="widget">
                <h4>Overview</h4>

                <div class="job-overview">

                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <div>
                                <strong>Location:</strong>
                                <span>20180 Outer Dr Dearborn, MI 48124</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user"></i>
                            <div>
                                <strong>Job Title:</strong>
                                <span>Food Service Specialist</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <div>
                                <strong>Hours:</strong>
                                <span>40h / week</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-money"></i>
                            <div>
                                <strong>Rate:</strong>
                                <span>$9.50 - $12.50 / hour</span>
                            </div>
                        </li>
                    </ul>


                    <a href="#small-dialog" class="popup-with-zoom-anim button">Apply For This Job</a>

                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                        <div class="small-dialog-headline">
                            <h2>Apply For This Job</h2>
                        </div>

                        <div class="small-dialog-content">
                            <form action="#" method="get" >
                                <input type="text" placeholder="Full Name" value=""/>
                                <input type="text" placeholder="Email Address" value=""/>
                                <textarea placeholder="Your message / cover letter sent to the employer"></textarea>

                                <!-- Upload CV -->
                                <div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
                                <div class="clearfix"></div>

                                <label class="upload-btn">
                                    <input type="file" multiple />
                                    <i class="fa fa-upload"></i> Browse
                                </label>
                                <span class="fake-input">No file selected</span>

                                <div class="divider"></div>

                                <button class="send">Send Application</button>
                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- Widgets / End -->


    </div>
    @endsection
