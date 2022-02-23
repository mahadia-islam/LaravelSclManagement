<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\StudentSubject;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    function index()
    {
        $student_subjects = StudentSubject::all();
        return view('admin.student_subject.student_subject', ['student_subjects' => $student_subjects]);
    }

    function create()
    {
        return view('admin.student_subject.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:fee_categories'
        ]);
        $student_subject = new StudentSubject();
        $student_subject->name = $request->name;
        $student_subject->save();
        $notification = [
            'message' => 'subject inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('student_subject.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $student_subject = StudentSubject::find($request->id);
        return view('admin.student_subject.edit', ['student_subject' => $student_subject]);
    }

    function update(Request $request)
    {
        $student_subject = StudentSubject::find($request->id);
        $student_subject->name = $request->name;
        $student_subject->save();
        $notification = [
            'message' => 'subject updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('student_subject.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $student_subject = StudentSubject::find($request->id);
        $student_subject->delete();
        $notification = [
            'message' => 'subject deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('student_subject.view'))->with($notification);
    }
}
