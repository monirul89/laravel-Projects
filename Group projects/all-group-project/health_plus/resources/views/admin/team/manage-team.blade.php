@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Team Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SL No</th>
                            <th>Team Title</th>
                            <th>Short Description</th>
                            <th>Doctor Name</th>
                            <th>Speciality</th>
                            <th>Consultant</th>
                            <th>Image</th>
                            <th>Publication</th>
                            <th width="100">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $team->team_title }}</td>
                                <td>{!! $team->short_description !!}</td>
                                <td>{!! $team->doctor_name !!}</td>
                                <td>{!! $team->doctor_speciality !!}</td>
                                <td>{!! $team->doctor_consultant !!}</td>
                                <td> <img src="{{asset($team->doctor_image)}}" alt=" " height="120" width="120" /> </td>
                                <td>{{ $team->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>

                                    @if($team->publication_status == 1)
                                        <a href="{{ route('unpublished-team', ['id'=> $team->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-team', ['id'=> $team->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-team', ['id'=>$team->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-team', ['id'=> $team->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection