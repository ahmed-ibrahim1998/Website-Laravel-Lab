@extends('BlogHome.layout')
@section('auth')
    <div class="container text-center">
        <div class="font-weight-bold text-success">Dashboard</div><br><br>
        @can('isAdmin')
            <a class="btn btn-success text-white"> <h1>I'm an Admin, You Have Admin Access !</h1></a>
        @elsecan('isUser')
            <a class="btn btn-success text-white"> <h1>I'm a user, I logged in !</h1></a>
        @elsecan('isManager')
            <a class="btn btn-success text-white"> <h1>I'm a Manager !</h1></a>
        @elsecan('isInstructor')
            <a class="btn btn-success text-white"> <h1>I'm a Instructor, !</h1></a>
        @else
            <a class="btn btn-success text-white"> <h1>I'm a guest, I'm not login yet !</h1></a><br><br>
        @endcan
    </div>
@endsection
