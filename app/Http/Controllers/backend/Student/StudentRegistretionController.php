<?php

namespace App\Http\Controllers\backend\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class StudentRegistretionController extends Controller
{
    function index(){
        $alldata['students'] = User::where('role', 'user')->get();
        return view('admin.user.student.view',$alldata);
    }

    function create(){
        return view('admin.user.student.create');
    }

    function registretion(Request $request){
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'mobile' => 'required|unique:users',
            'religion' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'id_no' => 'required',
            'dob' => 'required',
            'code' => 'required'
        ]);
        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->mobile = $request->mobile;
        $student->religion = $request->religion;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->id_no = $request->id_no;
        $student->dob = $request->dob;
        $student->code = $request->code;
        $student->save();
        $notification = [
            'message' => 'student registered successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('user_student.view'))->with($notification);
    }

    function edit(Request $request){
        $student = User::find($request->id);
        return view('admin.user.student.edit',['student'=>$student]);
    }

    function update(Request $request){
        $student = User::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->mobile = $request->mobile;
        $student->religion = $request->religion;
        $student->gender = $request->gender;
        $student->address = $request->address;
        $student->id_no = $request->id_no;
        $student->dob = $request->dob;
        $student->save();
        $notification = [
            'message' => 'student updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('user_student.view'))->with($notification);
    }

    function delete(Request $request){
        $student = User::find($request->id);
        $student->delete();
        $notification = [
            'message' => 'student deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('user_student.view'))->with($notification);
    }

    function generate_pdf(){
        $students = User::where('role','user')->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.user.student.all_student_pdf', ['students'=>$students]);
        return $pdf->stream('all_student.pdf');

    }
}
