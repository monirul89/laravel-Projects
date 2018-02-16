@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">View About Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>

                    <table class="table table-bordered">
                        <tr>
                            <th>About Id</th>
                            <td>{{ $about->id  }}</td>
                        </tr>

                        <tr>
                            <th>About Name</th>
                            <td>{{ $about->about_name  }}</td>
                        </tr>

                        <tr>
                            <th>About Image</th>
                            <td> <img src="{{asset($about->about_image)}}" alt=" " height="120" width="120" /> </td>
                        </tr>

                        <tr>
                            <th>About Description</th>
                            <td>{!! $about->about_description !!}</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection