<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    function index()
    {
        $exam_types = ExamType::all();
        return view('admin.exam_type.exam_type', ['exam_types' => $exam_types]);
    }

    function create()
    {
        return view('admin.exam_type.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:fee_categories'
        ]);
        $exam_type = new ExamType();
        $exam_type->name = $request->name;
        $exam_type->save();
        $notification = [
            'message' => 'exam type inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('exam_type.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $exam_type = ExamType::find($request->id);
        return view('admin.exam_type.edit', ['exam_type' => $exam_type]);
    }

    function update(Request $request)
    {
        $exam_type = ExamType::find($request->id);
        $exam_type->name = $request->name;
        $exam_type->save();
        $notification = [
            'message' => 'exam type updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('exam_type.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $exam_type = ExamType::find($request->id);
        $exam_type->delete();
        $notification = [
            'message' => 'exam type deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('exam_type.view'))->with($notification);
    }
}
