@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name() }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit') }}/{{ $user->id }}">Edit</a> | <a href="{{ route('users.delete') }}/{{ $user->id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <a href="{{ route('users.add') }}" class="btn btn-primary">Add User</a>
        </div>
    </div>
</div>
@endsection
