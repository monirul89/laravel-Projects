@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Category</h4>
                </div>
                <div class="panel-body">
                    <h3 class="text-success text-center">{{Session::get('message')}}</h3>
                    <br/>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th> Sub Category Name</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($subCategories as $subCategory)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$subCategory->sub_category_name}}</td>
                                <td>{{$subCategory->category_name}}</td>
                                <td>{{$subCategory->sub_category_description}}</td>
                                <td>{{$subCategory->publication_status == 1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($subCategory->publication_status == 1)
                                        <a href="{{route('unpublished-sub-category',['id'=>$subCategory->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{route('published-sub-category',['id'=>$subCategory->id])}}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-sub-category',['id'=>$subCategory->id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-sub-category',['id'=>$subCategory->id])}}" onclick="return confirm('Are you sure to delete this!!')" class="btn btn-danger btn-xs">
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