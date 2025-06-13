<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function show()
    {
        $student = Auth::user();
        return view('profile.show', compact('student'));
    }

    public function edit()
    {
        $student = Auth::user();
        return view('profile.edit', compact('student'));
    }

    public function update(Request $request)
    {
        $student = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'department' => 'required|string|max:255',
        ]);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
        ]);

        Session::flash('message', 'Profile updated successfully!');
        return redirect()->route('profile.show');
    }

    public function exportJson()
    {
        $student = Auth::user();
        $courses = $student->courses()->get(['title', 'credit_hours', 'instructor', 'department']);
        return response()->json($courses)->header('Content-Disposition', 'attachment; filename=courses.json');
    }

    public function exportXml()
    {
        $student = Auth::user();
        $courses = $student->courses()->get(['title', 'credit_hours', 'instructor', 'department']);

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><courses></courses>');
        foreach ($courses as $course) {
            $courseXml = $xml->addChild('course');
            $courseXml->addChild('title', htmlspecialchars($course->title));
            $courseXml->addChild('credit_hours', $course->credit_hours);
            $courseXml->addChild('instructor', htmlspecialchars($course->instructor));
            $courseXml->addChild('department', htmlspecialchars($course->department));
        }

        return response($xml->asXML(), 200, [
            'Content-Type' => 'application/xml',
            'Content-Disposition' => 'attachment; filename=courses.xml',
        ]);
    }
}