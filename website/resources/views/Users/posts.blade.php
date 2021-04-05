
@extends('BlogHome.layout')

@section('danger')
Posts By {{$user->name}}
@endsection


@section('POST')
        <table class="table">
            <th>
                    title
            </th>
            <th>
                    body
            </th>
            <th>
                slug
            </th>
            <th>
                version
            </th>
            <th>
                Show User
            </th>

            @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item["title"]}}
                        </td>
                        <td>
                            {{$item["body"]}}
                        </td>
                        <td>
                            {{$item["slug"]}}
                        </td>
                        <td>
                            {{$item["version"]}}
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{route('users.index')}}">Show User</a>
                        </td>
                    </tr>
            @endforeach
        </table>
@endsection
