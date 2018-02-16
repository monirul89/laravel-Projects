@extends('admin.master')

@section('title')
    Manage Project || Jamal Portfolio
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Project</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Service Name</th>
                            <th>Project Name</th>
                            <th>Project Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($projects as $project)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$project->service_name}}</td>
                                <td>{{$project->project_name}}</td>
                                <td><img src="{{asset($project->project_image)}}" alt="" width="100" height="50"/></td>
                                <td>{{$project->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('view-project',['id'=>$project->id])}}" title="View Project Details" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    @if($project->publication_status == 1)
                                        <a href="{{route('unpublished-project',['id'=>$project->id])}}" title="Unpublish Project" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-project',['id'=>$project->id])}}" title="Publish Project" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-project',['id'=>$project->id])}}" title="Edit Project" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-project',['id'=>$project->id])}}" onclick="return confirm('Are you sure to delete this!!')" title="Delete Project" class="btn btn-danger btn-xs">
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