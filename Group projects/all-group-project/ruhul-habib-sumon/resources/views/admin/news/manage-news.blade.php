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
                    <table class="table table-bordered">
                        <tr class="bg-primary text-center">
                            <th>Sl No</th>
                            <th>News Category</th>
                            <th>Sub News Category</th>
                            <th>News Title</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($news as $news)

                            <tr class="text-center">
                                <td>{{$i++}}</td>
                                <td>{{ $news->category_name }}</td>
                                <td>{{ $news->sub_category_name }}</td>
                                <td>{{ $news->news_title }}</td>
                                <td><img src="{{asset($news->news_image) }}" height="50" width="50"></td>
                                <td>{{ $news->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('view-news-details',['id'=>$news->id]) }}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>

                                    @if($news->publication_status == 1)
                                        <a href="{{ route('unpublished-news',['id'=>$news->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-news',['id'=>$news->id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-news',['id'=>$news->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-news',['id'=>$news->id])}}" onclick="return confirm('Are you sure to delete this!!')" class="btn btn-danger btn-xs">
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