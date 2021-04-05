@extends('BlogHome.layout')

@section('danger')
   User Profile
@endsection
@section('postspage')

        <table class="table">
            <th>
                name
            </th>
            <th>
                email
            </th>
            <th>
                Show Post
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item["name"]}}
                        </td>
                        <td>
                            {{$item["email"]}}
                        </td>
                        <td><a class="btn btn-primary"  href="{{route('user.posts', $item->id)}}" >show posts</a></td>
                    </tr>
            @endforeach
        </table>
@endsection
