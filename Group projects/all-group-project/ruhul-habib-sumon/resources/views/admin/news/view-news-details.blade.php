@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage News</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success" align="center">{{Session::get('message')}}</h3>

                    <table class="table table-bordered bg-info">
                        <tr>
                            <th class="col-md-4 ">News Id</th>
                            <td class="col-md-8 text-bold">{{ $news->id }}</td>
                        </tr>

                        <tr>
                            <th>News Title</th>
                            <td class="text-bold">{{ $news->news_title }}</td>
                        </tr>

                        <tr>
                            <th>News Image</th>
                            <td><img src="{{asset($news->news_image) }}" height="100" width="100"></td>
                        </tr>

                        <tr>
                            <th>Short Description</th>
                            <td class="text">{{ $news->short_description }}</td>
                        </tr>

                        <tr>
                            <th>Long Description</th>
                            <td class="text">{{ $news->long_description }}</td>
                        </tr>

                        <tr>
                            <th>Publication Status</th>
                            <td class="text">{{ $news->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection