@extends('layouts.app')

@section('content')
<div class="profile-info">
    <h2><i class="fas fa-user-circle"></i> Student Profile</h2>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Department:</strong> {{ $student->department }}</p>
</div>

<div class="table-container">
    <h3><i class="fas fa-book-open"></i> Registered Courses</h3>
    @if($student->courses->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Credit Hours</th>
                    <th>Instructor</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student->courses as $course)
                    <tr>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->credit_hours }}</td>
                        <td>{{ $course->instructor }}</td>
                        <td>{{ $course->department }}</td>
                        <td>
                            <form method="POST" action="{{ route('courses.unregister') }}" style="display:inline">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to unregister from this course?')">UnRegister</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-courses">You haven't registered for any courses yet.</p>
    @endif
    
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="profile-actions">
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