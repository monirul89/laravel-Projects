@extends('admin.master')

@section('title')
    View Project || Jamal Portfolio
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">View Project</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Project Id</th>
                            <td>{{$project->id}}</td>
                        </tr>
                        <tr>
                            <th>Service Id</th>
                            <td>{{$project->service_id}}</td>
                        </tr>
                        <tr>
                            <th>Project Name</th>
                            <td>{{$project->project_name}}</td>
                        </tr>
                        <tr>
                            <th>Project Description</th>
                            <td>{!! $project->project_description !!}</td>
                        </tr>
                        <tr>
                            <th>Project Image</th>
                            <td><img src="{{asset($project->project_image)}}" alt="project image"/></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$project->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection