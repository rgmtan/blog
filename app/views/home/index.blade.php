@extends('layouts.default')

@section('content')

<h1>All Users</h1>
<p>{{ HTML::link('create', 'Add a New User') }}</p>
@if(isset($users))
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->username}}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no users
@endif

@stop