@extends('admin.master')
@section('title' ,'Edit Category')

@section('p-title','Category Module')
@section('body')

    <div class="container py-5">

            <div class="col-lg-12 col-xs-12">
                <h4>Edit Category</h4>
                <div class="box-content card white">


                    <div class="card-content">
                        <form action="{{route('category.update',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inp-type-1" class="col-sm-3 control-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{$category->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inp-type-3" class="col-sm-3 control-label">Category Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{asset($category->image)}}" height="100" width="120" alt="" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inp-type-2" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="description" placeholder=" Category Description">{{$category->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inp-type-4" class="col-sm-3 control-label">Status</label>
                                <div class="col-sm-9">
                                    <label><input type="radio" name="status" {{$category->status == 1 ? 'checked' : ''}}  value="1" checked/>Pubilshed</label>
                                    <label><input type="radio" name="status" {{$category->status == 0 ? 'checked' : ''}}  value="0" />Unpubilshed</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-5" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit" class="btn btn-success"  value="Update a Category">
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
