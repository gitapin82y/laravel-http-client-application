@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">

                    <form action="{{ route('users.update',$user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name}}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email}}">
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a class="btn btn-primary" href="{{ route('users.index') }}">Return</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection