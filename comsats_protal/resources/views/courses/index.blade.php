@extends('layouts.app')

@section('content')
<div class="table-container">
    <h2>Available Courses</h2>
    <div class="filter-group">
        <input type="text" id="departmentFilter" placeholder="Filter by Department">
        <input type="text" id="instructorFilter" placeholder="Filter by Instructor">
    </div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Credit Hours</th>
                <th>Instructor</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="courseTable">
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->credit_hours }}</td>
                    <td>{{ $course->instructor }}</td>
                    <td>{{ $course->department }}</td>
                    <td>
                        <button class="register-course" data-id="{{ $course->id }}">Register</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $('#departmentFilter, #instructorFilter').on('input', function() {
        $.ajax({
            url: '{{ route('courses.index') }}',
            data: {
                department: $('#departmentFilter').val(),
                instructor: $('#instructorFilter').val()
            },
            success: function(courses) {
                $('#courseTable').empty();
                courses.forEach(course => {
                    $('#courseTable').append(`
                        <tr>
                            <td>${course.title}</td>
                            <td>${course.credit_hours}</td>
                            <td>${course.instructor}</td>
                            <td>${course.department}</td>
                            <td>
                                <button class="register-course" data-id="${course.id}">Register</button>
                            </td>
                        </tr>
                    `);
                });
            }
        });
    });

    $(document).on('click', '.register-course', function() {
        const courseId = $(this).data('id');
        $.ajax({
            url: '{{ route('courses.register') }}',
            method: 'POST',
            data: {
                course_id: courseId,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(xhr) {
                alert(xhr.responseJSON.message);
            }
        });
    });
});
</script>
@endsection