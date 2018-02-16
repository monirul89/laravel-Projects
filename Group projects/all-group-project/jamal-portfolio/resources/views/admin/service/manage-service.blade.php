@extends('admin.master')

@section('title')
    Manage Service || Jamal Portfolio
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Service</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success">{{Session::get('message')}}</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($services as $service)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$service->service_name}}</td>
                                <td>{{$service->service_description}}</td>
                                <td>{{$service->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($service->publication_status == 1)
                                        <a href="{{route('unpublished-service',['id'=>$service->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-service',['id'=>$service->id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-service',['id'=>$service->id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-service',['id'=>$service->id])}}" onclick="return confirm('Are you sure to delete this!!')" class="btn btn-danger btn-xs">
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