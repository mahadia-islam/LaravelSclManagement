<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    function index(){
        $students = StudentClass::all();
        $allData['students'] = $students;
        return view('admin.student.student',$allData);
    }

    function show_create_form(){
        return view('admin.student.create');
    }

    function create(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:student_classes'
        ]);
        $student = new StudentClass();
        $student->name = $request->name;
        $student->save();
        $notification = [
            'message' => 'student created successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('student.view'))->with($notification);
    }

    function edit(Request $request){
        $student = StudentClass::find($request->id);
        return view('admin.student.edit',['student' => $student]);
    }

    function update(Request $request){
        $student = StudentClass::find($request->id);
        $student->name = $request->name;
        $student->save();
        $notification = [
            'message' => 'student updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('student.view'))->with($notification);
    }

    function delete(Request $request){
        $student = StudentClass::find($request->id);
        $student->delete();
        $notification = [
            'message' => 'student deleted successfully',
            'alert-type' => 'warning'
        ];
        return Redirect(route('student.view'))->with($notification);
    }
}
