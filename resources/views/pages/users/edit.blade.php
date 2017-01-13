@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if (count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">

                    <form action="{{ route('users.edit') }}/{{ $user->id }}" method="post" autocomplete="off" />
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" id="" class="form-control" value="{{ $user->first_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" id="" class="form-control" value="{{ $user->last_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input type="text" name="middle_name" id="" class="form-control" value="{{ $user->middle_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" id="" class="form-control" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary" />
                            <a href="{{ route('users.list') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
