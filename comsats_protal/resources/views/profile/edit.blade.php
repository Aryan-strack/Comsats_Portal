@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Edit Profile</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="@error('name') error @enderror" value="{{ old('name', $student->name) }}">
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="@error('email') error @enderror" value="{{ old('email', $student->email) }}">
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" class="@error('department') error @enderror" value="{{ old('department', $student->department) }}">
            @error('department')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Update</button>
    </form>
</div>
@endsection