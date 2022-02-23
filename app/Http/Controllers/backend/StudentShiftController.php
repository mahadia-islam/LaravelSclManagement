<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\StudentShift;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{
    function index()
    {
        $student_shifts = StudentShift::all();
        return view('admin.student_shift.student_shift', ['student_shifts' => $student_shifts]);
    }

    function create()
    {
        return view('admin.student_shift.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:student_shifts'
        ]);
        $student_shift = new StudentShift();
        $student_shift->name = $request->name;
        $student_shift->save();
        $notification = [
            'message' => 'student shift inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('student_shift.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $student_shift = StudentShift::find($request->id);
        return view('admin.student_shift.edit', ['student_shift' => $student_shift]);
    }

    function update(Request $request)
    {
        $student_shift = StudentShift::find($request->id);
        $student_shift->name = $request->name;
        $student_shift->save();
        $notification = [
            'message' => 'student shift updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('student_shift.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $student_shift = StudentShift::find($request->id);
        $student_shift->delete();
        $notification = [
            'message' => 'student shift deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('student_shift.view'))->with($notification);
    }
}
