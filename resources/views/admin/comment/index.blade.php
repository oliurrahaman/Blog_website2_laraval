@extends('admin.master')
@section('title','Manage Comment')
@section('p-title', 'Blog Module')

@section('body')
<div class="col-xs-12">
    <div class="box-content">
        <p class="text-center text-success">{{session('message')}}</p>
        <h4 class="box-title">All Comment Information</h4>
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
                    <th>Blog Title</th>
                    <th>Visitor Name</th>
                    <th>Comment</th>
                     <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment )


                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$comment->blog->title}}</td>
                    <td>{{$comment->visitor->name}}</td>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->status ==1? 'Published' :'Unpublished'}}</td>
                    <td>
                        <a href="{{route('comment.update-status',['id'=>$comment->id])}}" class="btn {{$comment->status==1?'btn-success' :'btn-warning' }}"><i class="fa fa-arrow-circle-up"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-content -->
</div>

@endsection
