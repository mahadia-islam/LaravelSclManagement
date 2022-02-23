<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\StudentGroup;
use Illuminate\Http\Request;

class StudentGroupController extends Controller
{
    function index()
    {
        $student_groups = StudentGroup::all();
        return view('admin.student_group.student_group', ['student_groups' => $student_groups]);
    }

    function create()
    {
        return view('admin.student_group.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:student_groups'
        ]);
        $student_group = new StudentGroup();
        $student_group->name = $request->name;
        $student_group->save();
        $notification = [
            'message' => 'student group inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('student_group.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $student_group = StudentGroup::find($request->id);
        return view('admin.student_group.edit', ['student_group' => $student_group]);
    }

    function update(Request $request)
    {
        $student_group = StudentGroup::find($request->id);
        $student_group->name = $request->name;
        $student_group->save();
        $notification = [
            'message' => 'student group updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('student_group.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $student_group = StudentGroup::find($request->id);
        $student_group->delete();
        $notification = [
            'message' => 'student group deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('student_group.view'))->with($notification);
    }
}
