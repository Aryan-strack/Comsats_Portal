@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="@error('email') error @enderror" value="{{ old('email') }}">
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="@error('password') error @enderror">
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
@endsection