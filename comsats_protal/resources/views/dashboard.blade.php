@extends('layouts.app')

@section('content')
<div class="dashboard-welcome">
    <h2>Welcome back, {{ Auth::user()->name }}!</h2>
    <p>Your student dashboard provides quick access to your profile and available courses. Stay updated with your academic progress.</p>
    <div class="dashboard-actions">
        <a href="{{ route('profile.show') }}" class="btn">
            <i class="fas fa-user"></i> View Profile
        </a>
        <a href="{{ route('courses.index') }}" class="btn">
            <i class="fas fa-book"></i> Browse Courses
        </a>
    </div>
</div>

<div class="table-container">
    <h2>Quick Actions</h2>
    <div class="dashboard-actions">
        <a href="{{ route('profile.edit') }}" class="btn">
            <i class="fas fa-edit"></i> Edit Profile
        </a>
        <a href="{{ route('profile.export.json') }}" class="btn btn-green">
            <i class="fas fa-file-export"></i> Export to JSON
        </a>
        <a href="{{ route('profile.export.xml') }}" class="btn btn-green">
            <i class="fas fa-file-export"></i> Export to XML
        </a>
    </div>
</div>
@endsection