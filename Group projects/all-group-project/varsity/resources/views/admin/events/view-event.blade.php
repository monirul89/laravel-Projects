@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">View Event Details</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Event Id</th>
                            <td>{{ $event->id  }}</td>
                        </tr>
                        <tr>
                            <th>Event Name</th>
                            <td>{{ $event->event_name  }}</td>
                        </tr>
                        <tr>
                            <th>Event Date</th>
                            <td>{{ $event->event_date  }}</td>
                        </tr>
                        <tr>
                            <th>Event Time</th>
                            <td>{{ $event->event_time  }}</td>
                        </tr>
                        <tr>
                            <th>Event Location</th>
                            <td>{{ $event->event_location  }}</td>
                        </tr>
                        <tr>
                            <th>Event Image</th>
                            <td><img src="{{asset($event->event_image)}}" alt="" height="150px;" width="150px;"/></td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $event->short_description }}</td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $event->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $event->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection