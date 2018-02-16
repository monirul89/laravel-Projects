@extends('admin.master-search')

@section('title')
    Manage Job
    @endsection

@section('search-body')
    <section class=" wrapper">
        <div class="row">
            <div class="col-md-12">
                <section class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Manage Job</h2>
                    </div>
                    <div class="panel-body">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th> SL No</th>
                                <th>Company Name</th>
                                <th>Job Title</th>
                                <th>Educaion</th>
                                <th>Experience:</th>
                                <th>Salary</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th> SL No </th>
                                <th>Company Name</th>
                                <th>Job Title</th>
                                <th>Educaion</th>
                                <th>Experience</th>
                                <th>Salary</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>

                            @php($i=1)
                            @foreach($services as $service)

                                <tr>
                                    <td> {{ $i++ }} </td>
                                    <td> {{ $service->company_name }}</td>
                                    <td>{{ $service->job_title }}</td>
                                    <td>{{ $service->last_education }}</td>
                                    <td>{{ $service->experience }}</td>
                                    <td>{{ $service->salary_range }}</td>
                                    <td>{{ $service->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="center" width="80">
                                        @if($service->publication_status == 1)
                                            <a class="btn btn-success btn-xs" href="{{route('published-job', ['id'=>$service->id])}}">
                                                <span class="fa fa-arrow-up"></span>
                                            </a>
                                        @else
                                            <a class="btn btn-warning btn-xs" href="{{route('unpublished-job', ['id'=>$service->id])}}">
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
