<!-- resources/views/lawyer/login.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lawyer Login</h2>
    <form method="POST" action="{{ route('lawyer.login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
