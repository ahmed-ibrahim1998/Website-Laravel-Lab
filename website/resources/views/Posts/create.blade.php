@extends('BlogHome.layout')


@section('danger')
    Add Posts By Simple OR Resource Controller
@endsection


@section('add')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Posts</div>
                <div class="card-body">
                    <form method="post"  action="{{route('posts.store')}}">
                        <div class="form-group">
                            @csrf
                            <label class="label">title </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" />
                            <label class="text-danger">{{$errors->first("title")}}</label>
                        </div>
                       <div class="form-group">
                            <label class="label">slug </label>
                            <input type="text" name="slug" class="form-control"  value="{{old('slug')}}"/>
                            <label class="text-danger">{{$errors->first("slug")}}</label>
                       </div>
                        <div class="form-group">
                            <label class="label">body </label>
                            <input type="text" name="body" class="form-control"  value="{{old('body')}}"/>
                            <label class="text-danger">{{$errors->first("body")}}</label>
                        </div>
                        <div class="form-group">
                            <label class="label">version </label>
                            <input type="text" name="version" class="form-control" value="{{old('version')}}"/>                            <label class="text-danger">{{$errors->first("body")}}</label>
                            <label class="text-danger">{{$errors->first("version")}}</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
