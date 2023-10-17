@extends('admin.master')
@section('title' ,'Add Category')

@section('p-title','Category Module')
@section('body')

    <div class="container py-5">

            <div class="col-lg-12 col-xs-12">
                <h4>Edit Blog</h4>
                <div class="box-content card white">


                    <div class="card-content">
                        <form action="{{route('blog.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inp-type-1" class="col-sm-3 control-label">Blog Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" value="{{$blog->title }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inp-type-1" class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="category_id">
                                        <option value=""> -- Select Blog Category -- </option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$blog->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inp-type-3" class="col-sm-3 control-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{asset($blog->image)}}" height="100" width="120" alt="" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inp-type-2" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="description" placeholder="Blog Description">{{$blog->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inp-type-4" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" name="status" {{$blog->status == 1 ? 'checked' : ''}} value="1" checked/>Pubilshed</label>
                                    <label><input type="radio" name="status" {{$blog->status == 0 ? 'checked' : ''}} value="0" />Unpubilshed</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-5" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit" class="btn btn-success"  value="Update a Blog">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content card white -->
            </div>



    </div>



@endsection
