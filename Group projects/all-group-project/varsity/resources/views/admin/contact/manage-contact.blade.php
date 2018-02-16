@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage Contact Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <th>SL No</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($contact->publication_status == 1)
                                        <a href="{{ route('unpublished-contact', ['id'=> $contact->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-contact', ['id'=> $contact->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{ route('edit-contact', ['id'=> $contact->id]) }}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-contact', ['id'=> $contact->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this contact??')" >
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