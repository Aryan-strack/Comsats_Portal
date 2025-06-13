<?php
namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Computer Science Courses
        Course::create(['title' => 'Introduction to Programming', 'credit_hours' => 3, 'instructor' => 'Dr. Smith', 'department' => 'Computer Science']);
        Course::create(['title' => 'Data Structures', 'credit_hours' => 4, 'instructor' => 'Prof. Johnson', 'department' => 'Computer Science']);
        Course::create(['title' => 'Algorithms', 'credit_hours' => 4, 'instructor' => 'Dr. Williams', 'department' => 'Computer Science']);
        Course::create(['title' => 'Database Systems', 'credit_hours' => 3, 'instructor' => 'Prof. Davis', 'department' => 'Computer Science']);
        Course::create(['title' => 'Computer Networks', 'credit_hours' => 3, 'instructor' => 'Dr. Miller', 'department' => 'Computer Science']);
        Course::create(['title' => 'Artificial Intelligence', 'credit_hours' => 4, 'instructor' => 'Prof. Wilson', 'department' => 'Computer Science']);
        Course::create(['title' => 'Web Development', 'credit_hours' => 3, 'instructor' => 'Dr. Taylor', 'department' => 'Computer Science']);
        Course::create(['title' => 'Software Engineering', 'credit_hours' => 4, 'instructor' => 'Prof. Anderson', 'department' => 'Computer Science']);
        Course::create(['title' => 'Operating Systems', 'credit_hours' => 4, 'instructor' => 'Dr. Thomas', 'department' => 'Computer Science']);
        Course::create(['title' => 'Computer Architecture', 'credit_hours' => 3, 'instructor' => 'Prof. Jackson', 'department' => 'Computer Science']);

        // Mathematics Courses
        Course::create(['title' => 'Calculus I', 'credit_hours' => 3, 'instructor' => 'Dr. Brown', 'department' => 'Mathematics']);
        Course::create(['title' => 'Calculus II', 'credit_hours' => 3, 'instructor' => 'Dr. White', 'department' => 'Mathematics']);
        Course::create(['title' => 'Linear Algebra', 'credit_hours' => 3, 'instructor' => 'Prof. Harris', 'department' => 'Mathematics']);
        Course::create(['title' => 'Discrete Mathematics', 'credit_hours' => 3, 'instructor' => 'Dr. Martin', 'department' => 'Mathematics']);
        Course::create(['title' => 'Probability & Statistics', 'credit_hours' => 4, 'instructor' => 'Prof. Thompson', 'department' => 'Mathematics']);
        Course::create(['title' => 'Differential Equations', 'credit_hours' => 3, 'instructor' => 'Dr. Garcia', 'department' => 'Mathematics']);
        Course::create(['title' => 'Numerical Methods', 'credit_hours' => 4, 'instructor' => 'Prof. Martinez', 'department' => 'Mathematics']);

        // Electrical Engineering Courses
        Course::create(['title' => 'Circuit Theory', 'credit_hours' => 4, 'instructor' => 'Dr. Robinson', 'department' => 'Electrical Engineering']);
        Course::create(['title' => 'Digital Logic Design', 'credit_hours' => 3, 'instructor' => 'Prof. Clark', 'department' => 'Electrical Engineering']);
        Course::create(['title' => 'Signals and Systems', 'credit_hours' => 4, 'instructor' => 'Dr. Rodriguez', 'department' => 'Electrical Engineering']);
        Course::create(['title' => 'Electronics', 'credit_hours' => 4, 'instructor' => 'Prof. Lewis', 'department' => 'Electrical Engineering']);
        Course::create(['title' => 'Power Systems', 'credit_hours' => 3, 'instructor' => 'Dr. Lee', 'department' => 'Electrical Engineering']);
        Course::create(['title' => 'Control Systems', 'credit_hours' => 4, 'instructor' => 'Prof. Walker', 'department' => 'Electrical Engineering']);

        // Business Courses
        Course::create(['title' => 'Introduction to Business', 'credit_hours' => 3, 'instructor' => 'Dr. Hall', 'department' => 'Business']);
        Course::create(['title' => 'Principles of Marketing', 'credit_hours' => 3, 'instructor' => 'Prof. Allen', 'department' => 'Business']);
        Course::create(['title' => 'Financial Accounting', 'credit_hours' => 4, 'instructor' => 'Dr. Young', 'department' => 'Business']);
        Course::create(['title' => 'Organizational Behavior', 'credit_hours' => 3, 'instructor' => 'Prof. Hernandez', 'department' => 'Business']);
        Course::create(['title' => 'Business Ethics', 'credit_hours' => 2, 'instructor' => 'Dr. King', 'department' => 'Business']);
        Course::create(['title' => 'Entrepreneurship', 'credit_hours' => 3, 'instructor' => 'Prof. Wright', 'department' => 'Business']);

        // Social Sciences Courses
        Course::create(['title' => 'Introduction to Psychology', 'credit_hours' => 3, 'instructor' => 'Dr. Lopez', 'department' => 'Social Sciences']);
        Course::create(['title' => 'Sociology', 'credit_hours' => 3, 'instructor' => 'Prof. Scott', 'department' => 'Social Sciences']);
        Course::create(['title' => 'Political Science', 'credit_hours' => 3, 'instructor' => 'Dr. Green', 'department' => 'Social Sciences']);
        Course::create(['title' => 'Cultural Anthropology', 'credit_hours' => 3, 'instructor' => 'Prof. Adams', 'department' => 'Social Sciences']);
        Course::create(['title' => 'International Relations', 'credit_hours' => 4, 'instructor' => 'Dr. Baker', 'department' => 'Social Sciences']);

        // Natural Sciences Courses
        Course::create(['title' => 'General Physics I', 'credit_hours' => 4, 'instructor' => 'Prof. Gonzalez', 'department' => 'Natural Sciences']);
        Course::create(['title' => 'General Chemistry', 'credit_hours' => 4, 'instructor' => 'Dr. Nelson', 'department' => 'Natural Sciences']);
        Course::create(['title' => 'Biology I', 'credit_hours' => 4, 'instructor' => 'Prof. Carter', 'department' => 'Natural Sciences']);
        Course::create(['title' => 'Environmental Science', 'credit_hours' => 3, 'instructor' => 'Dr. Mitchell', 'department' => 'Natural Sciences']);
        Course::create(['title' => 'Astronomy', 'credit_hours' => 3, 'instructor' => 'Prof. Perez', 'department' => 'Natural Sciences']);
    }
}