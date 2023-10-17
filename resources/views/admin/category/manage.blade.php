@extends('admin.master')
@section('title','Manage Category')
@section('p-title', 'Category Module')

@section('body')
<div class="col-xs-12">
    <div class="box-content">
        <h4 class="box-title">All Category Information</h4>
        <!-- /.box-title -->
        <div class="dropdown js__drop_down">
            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
            <ul class="sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else there</a></li>
                <li class="split"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
            <!-- /.sub-menu -->
        </div>
        <!-- /.dropdown js__dropdown -->
        <table id="example" class="table table-striped table-bordered display" style="width:100%">
            <thead>
                <tr>
                    <th>SL NO</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category )


                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td><img src="{{asset($category->image)}}" height="50" width="70" alt=""/></td>
                    <td>{{$category->status ==1?'Published' :'Unpublished'}}</td>
                    <td>
                        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('category.delete',['id' => $category->id]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.box-content -->
</div>

@endsection
