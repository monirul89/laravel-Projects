@extends('front-end.master')

@section('title')
    Services || Jamal's Portfolio
@endsection

@section('body')
    <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Services</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('/')}}">
                                    <i class="ion-ios-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--
    ==================================================
        Service Page Section  Start
    ================================================== -->
    <section id="service-page" class="pages service-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="block">
                        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What Services I Offer</h2>
                        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">I offer website design and development related services</p>
                        <div class="row service-parts">
                            @foreach($services as $service)
                            <div class="col-md-6">
                                <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                    <i class="ion-ios-paper-outline"></i>
                                    <h4>{{$service->service_name}}</h4>
                                    <p>{!! $service->service_description !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <img class="img-responsive" src="{{asset('/')}}front/images/team.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection