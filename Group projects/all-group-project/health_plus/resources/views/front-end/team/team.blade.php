@extends('front-end.master')

@section('title')
   Our Team
@endsection

@section('body')

    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>

    <div class="team portfolio " id="team">
        <div class="container">
            <h3 class="w3_heade_tittle_agile">Amazing Team</h3>
            <p class="sub_t_agileits">Meet Our Amazing Team...</p>
            <div class="w3layouts-grids">
                @foreach($teams as $team)
                <div class="col-md-3 wthree_team_grid">

                    <div class="wthree_team_grid1">
                        <div class="hover14 column">
                            <div>
                                <figure><img src="{{asset($team->doctor_image)}}" alt=" " class="img-responsive" /></figure>
                            </div>
                        </div>
                        <div class="wthree_team_grid1_pos">
                            <h3>{{$team->team_title}}</h3>
                            <h3>{{$team->doctor_name}}</h3>
                            <h4>{{$team->doctor_speciality}}</h4>
                            <h5> {{$team->doctor_consultant}} </h5>
                            <h6>{!! $team->short_description !!} </h6>
                        </div>
                    </div>

                </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>








@endsection