<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'department', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }
}