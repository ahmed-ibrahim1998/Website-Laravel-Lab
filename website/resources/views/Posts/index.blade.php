@extends("BlogHome.layout")

@section('post')

    <h1 class="text-center">All Posts Of Title And Body By Simple Controller</h1>

    <table class="table">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Body</th>
            <th>Version</th>
            <th>Author</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
        @foreach ($data as $item)
            <tr>
                <td>
                    {{$item["id"]}}
                </td>
                <td>
                    {{$item["title"]}}
                </td>
                <td>
                    {{$item["slug"]}}
                </td>
                <td>
                    {{$item["body"]}}
                </td>
                <td>
                    {{$item["version"]}}
                </td>
                <td>
                    <a href="{{route('user.posts',$item->user->id)}}"> {{$item->user->name}}</a>
                </td>
                <td>
{{--                    {{dd($item["id"])}} --}}
                    <a href="{{ route('posts.show',$item->id) }}" class="btn btn-warning">Show</a>
                </td>
                <td>
                    <a href="{{ route('posts.edit',$item->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td>
                    <form action="{{ route('posts.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            <tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
@endsection
