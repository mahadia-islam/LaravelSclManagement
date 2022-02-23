<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AssignSubject;
use App\Models\StudentClass;
use App\Models\StudentSubject;
use Illuminate\Http\Request;

class AssignSubjectController extends Controller
{
    function index()
    {
        $assign_subjects = AssignSubject::select(['student_class_id'])->groupBy(['student_class_id'])->get();
        return view('admin.assign_subject.assign_subject', ['assign_subjects' => $assign_subjects]);
    }

    function create()
    {
        $student_classes = StudentClass::all();
        $student_subjects = StudentSubject::all();
        return view('admin.assign_subject.create', ['student_classes' => $student_classes,'student_subjects'=>$student_subjects]);
    }

    function store(Request $request)
    {
        foreach ($request->student_subject_id as $key => $subject_id) {
            $assign_subject = new AssignSubject();
            $assign_subject->student_class_id = intval($request->student_class_id);
            $assign_subject->student_subject_id = intval($subject_id);
            $assign_subject->full_mark = 100;
            $assign_subject->pass_mark = 33;
            $assign_subject->save();
        }
        $notification = [
            'message' => 'assgin subject successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('assign_subject.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $assign_subject = AssignSubject::find($request->id);
        $student_class = StudentClass::find($assign_subject->student_class_id);
        $student_classes = StudentClass::all();
        $student_subjects = StudentSubject::all();
        $student_subject = StudentSubject::find($assign_subject->student_subject_id);
        return view('admin.assign_subject.edit', [
            'assign_subject' => $assign_subject,
            'student_class' => $student_class,
            'student_classes' => $student_classes,
            'student_subject' => $student_subject,
            'student_subjects' => $student_subjects
        ]);
    }

    function update(Request $request)
    {
        $assign_subject = AssignSubject::find($request->id);
        $assign_subject->student_class_id = $request->student_class_id;
        $assign_subject->student_subject_id = $request->student_subject_id;
        $assign_subject->save();
        $notification = [
            'message' => 'subject updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('assign_subject.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $assign_subject = AssignSubject::find($request->id);
        $assign_subject->delete();
        $notification = [
            'message' => 'subject deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('assign_subject.view'))->with($notification);
    }

    function show(Request $request)
    {
        $assign_subjects = AssignSubject::where('student_class_id', $request->id)->get();
        return view('admin.assign_subject.show', ['assign_subjects' => $assign_subjects]);
    }
}
