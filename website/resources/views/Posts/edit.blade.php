@extends('BlogHome.layout')


@section('danger')
    Edit Post Number {{$data->id}} By Simple Controller
@endsection

@section('edit')
    <div class="card uper container">
        <div class="card-body">

            <form method="POST" action="{{ route('posts.update', $data->id) }}">
                @csrf
                 @method('PUT')
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" name="title" id="post_name" value="{{ $data->title }}" />
                    <label class="text-danger">{{$errors->first("title")}}</label>
                </div>
                <div class="form-group">
                    <label for="price">Slug:</label>
                    <textarea name="slug" id="data_email" class="form-control">{{ $data->slug }}</textarea>
                    <label class="text-danger">{{$errors->first("slug")}}</label>
                </div>
                <div class="form-group">
                    <label for="price">Body:</label>
                    <textarea name="body" id="data_phone" class="form-control">{{ $data->body }}</textarea>
                    <label class="text-danger">{{$errors->first("body")}}</label>
                </div>
                <div class="form-group">
                    <label for="price">Version:</label>
                    <textarea name="version" id="data_age" class="form-control">{{ $data->version }}</textarea>
                    <label class="text-danger">{{$errors->first("version")}}</label>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
