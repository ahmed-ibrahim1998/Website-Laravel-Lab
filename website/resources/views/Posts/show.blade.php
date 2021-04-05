@extends('BlogHome.layout')


@section('danger')
    Post Number {{$data->id}} By Simple Controller
@endsection


@section('show')
    <div class="card uper container">
        <div class="card-header">
            <a class="btn btn-warning text-center" href="{{ route('posts.index') }}">Back</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Id:</strong>
                        {{ $data->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {{ $data->title }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Slug:</strong>
                        {{ $data->slug }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>body:</strong>
                        {{ $data->body }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>created at:</strong>

                        {{ $data->created_at }}
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>updated_at:</strong>
                        {{ $data->updated_at }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <div class="form-group">
                        <a href="{{ route('posts.edit', $data->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('posts.destroy', $data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('posts.destroy', $data->id)}}" class="btn btn-danger" type="submit">Delete</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
