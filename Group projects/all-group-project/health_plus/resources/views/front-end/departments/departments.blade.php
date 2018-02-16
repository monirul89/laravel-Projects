@extends('front-end.master')

@section('title')
   Departments
@endsection

@section('body')

    <div class="banner1 jarallax">
        <div class="container">
        </div>
    </div>
    <!-- //banner1 -->



    <div class="agile_menu" id="menu">
        <div class="container">

            <h3 class="w3_heade_tittle_agile" >Our Departments</h3>
            <br/>
            <div class="menu_w3ls_agile_top_section">
                <div class="ziehharmonika">
                    @foreach($departments as $department)
                    <h3>{{$department->department_name}}</h3>
                    <div>
                        <div class="w3_agile_recipe-grid">

                            <div class="col-md-6 col-sm-6 tab-image">
                                <img src="{{asset($department->department_image)}}" alt="Medicinal">
                            </div>
                            <div class="col-md-6 col-sm-6 tab-info">
                                <h4>{{$department->department_title}}</h4>
                                <p>{!! $department->department_description !!} </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>




@endsection