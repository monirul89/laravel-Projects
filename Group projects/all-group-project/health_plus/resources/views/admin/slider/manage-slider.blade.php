@extends('admin.master')

@section('body')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-primary">Manage About Info</h4>
                </div>
                <div class="panel-body">
                    <h4 class="text-success text-center mb-4"> {{ Session::get('message') }} </h4>
                    <table class="table table-bordered">
                        <tr class="bg-danger">
                            <th>SL No</th>
                            <th>Slider Title</th>
                            <th>Slider Sort Title</th>
                            <th>Slider Descriptione</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $slider->slider_title }}</td>
                                <td>{{ $slider->slider_sort_title }}</td>
                                <td>{!! $slider->slider_description !!}</td>
                                <td> <img src="{{asset($slider->slider_image)}}" alt=" " height="120" width="120" /> </td>
                                <td>{{ $slider->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>

                                    @if($slider->publication_status == 1)
                                        <a href="{{ route('unpublished-slider', ['id'=> $slider->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{ route('published-slider', ['id'=> $slider->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-slider', ['id'=>$slider->id])}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-slider', ['id'=> $slider->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to Delete this Category??')" >
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