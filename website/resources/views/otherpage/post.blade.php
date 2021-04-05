@extends("BlogHome.layout")

@section('post')
    <p class="text-center">All Posts Of Title And Title</p>
    <table class="table ">
        <thead>
            <th>
                Title
            </th>
            <th>
                Body
            </th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        {{$item["title"]}}
                    </td>
                    <td>
                        {{$item["body"]}}
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
@endsection
