@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">View News Details</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>News Title</th>
                            <td>{{ $news->news_title  }}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $news->category_name  }}</td>
                        </tr>
                        <tr>
                            <th>Sub Category Name</th>
                            <td>{{ $news->sub_category_name  }}</td>
                        </tr>
                        <tr>
                            <th>Breaking News Status</th>
                            <td>{{ $news->breaking_news_status == 1 ? 'Yes':'No'  }}</td>
                        </tr>
                        <tr>
                            <th>Short Description</th>
                            <td>{{ $news->short_description  }}</td>
                        </tr>
                        <tr>
                            <th>News Image</th>
                            <td><img src="{{asset($news->news_image)}}" alt="" /></td>
                        </tr>
                        <tr>
                            <th>Long Description</th>
                            <td>{!! $news->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $news->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection