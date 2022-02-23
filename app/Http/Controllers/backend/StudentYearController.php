<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\StudentYear;
use Illuminate\Http\Request;

class StudentYearController extends Controller
{
    function index()
    {
        $student_years = StudentYear::all();
        return view('admin.student_year.student_year', ['student_years' => $student_years]);
    }

    function create()
    {
        return view('admin.student_year.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:student_years'
        ]);
        $student_year = new StudentYear();
        $student_year->name = $request->name;
        $student_year->save();
        $notification = [
            'message' => 'student year inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('student_year.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $student_year = StudentYear::find($request->id);
        return view('admin.student_year.edit', ['student_year' => $student_year]);
    }

    function update(Request $request)
    {
        $student_year = StudentYear::find($request->id);
        $student_year->name = $request->name;
        $student_year->save();
        $notification = [
            'message' => 'student year updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('student_year.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $student_year = StudentYear::find($request->id);
        $student_year->delete();
        $notification = [
            'message' => 'student year deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('student_year.view'))->with($notification);
    }
}
