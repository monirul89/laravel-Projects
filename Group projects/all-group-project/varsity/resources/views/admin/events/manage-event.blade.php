@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Events Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Event Name</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Event Location</th>
                            <th>Short Description</th>
                            <th>Event Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->event_date }}</td>
                                <td>{{ $event->event_time }}</td>
                                <td>{{ $event->event_location }}</td>
                                <td>{{ $event->short_description }}</td>
                                <td><img src="{{asset($event->event_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{ $event->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($event->publication_status == 1)
                                        <a href="{{ route('unpublished-event', ['id'=> $event->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-event', ['id'=> $event->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('view-event', ['id'=> $event->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{ route('edit-event', ['id'=> $event->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-event', ['id'=> $event->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this event??')" >
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