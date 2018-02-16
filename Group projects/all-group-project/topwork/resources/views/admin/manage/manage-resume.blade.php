@extends('admin.master-search')

@section('title')
    Manage resume
    @endsection

@section('search-body')
    <section class=" wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Browse Resume</h2>
                    </div>
                    <div class="panel-body">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Short Description</th>
                                <th>publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Email</th>
                                <th>Short Description</th>
                                <th>publication Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @php($i=1)
                            @foreach($candidates as $candidate)

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $candidate->candidate_name }}</td>
                                    <td>{{ $candidate->selected_skill }}</td>
                                    <td>{{ $candidate->	candidate_email }}</td>
                                    <td>{!! $candidate->resume_description !!}</td>
                                    <td>{{ $candidate->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="center" width="80">

                                        @if($candidate->publication_status == 1)
                                            <a class="btn btn-success btn-xs" href="{{route('unpublished-resume', ['id'=>$candidate->id])}}">
                                                <span class="fa fa-arrow-up"></span>
                                            </a>
                                        @else
                                            <a class="btn btn-warning btn-xs" href="{{route('published-resume', ['id'=>$candidate->id])}}">
                                                <span class="fa fa-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a class="btn btn-success btn-xs" href="#">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
    @endsection
