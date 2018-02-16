@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage News</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <br/>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>News Title</th>
                            <th>Category Name</th>
                            <th>Short Description </th>
                            <th>Breaking News Status</th>
                            <th>News Image</th>
                            <th>Publication Status</th>
                            <th width="130">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($newses as $news)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$news->news_title}}</td>
                                <td>{{$news->category_name}}</td>
                                <td>{{$news->short_description}}</td>
                                <td>{{$news->breaking_news_status == 1 ? 'Yes':'No'}}</td>
                                <td><img src="{{asset($news->news_image)}}" alt=" " height="120" width="120" /></td>
                                <td>{{$news->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($news->breaking_news_status == 1)
                                        <a href="{{route('remove-breaking-news',['id'=>$news->id])}}" class="btn btn-primary btn-xs" title="Remove Breaking News">
                                            <span class="glyphicon glyphicon-pushpin"></span>
                                        </a>
                                    @else
                                        <a href="{{route('make-breaking-news',['id'=>$news->id])}}" class="btn btn-warning btn-xs" title="Make Breaking News">
                                            <span class="glyphicon glyphicon-pushpin"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-news',['id'=>$news->id])}}" class="btn btn-success btn-xs" title="Edit News">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    @if($news->publication_status == 1)
                                        <a href="{{route('unpublished-news',['id'=>$news->id])}}" class="btn btn-info btn-xs" title="Unpublish News">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-news',['id'=>$news->id])}}" class="btn btn-warning btn-xs" title="Publish News">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('view-news',['id'=>$news->id])}}" class="btn btn-success btn-xs" title="View News">
                                        <span class="glyphicon glyphicon-fullscreen"></span>
                                    </a>
                                    <a href="{{route('delete-news',['id'=>$news->id])}}" onclick="return confirm('Are you sure to delete this!!')" class="btn btn-danger btn-xs" title="Delete News">
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