<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AssignStudent;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentYear;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AssignStudentController extends Controller
{
    function index()
    {
        $assign_students = AssignStudent::select(['student_class_id'])->groupBy(['student_class_id'])->get();
        return view('admin.assign_student.assign_student', ['assign_students' => $assign_students]);
    }

    function create()
    {
        $allData['student_classes'] = StudentClass::all();
        $allData['student_years'] = StudentYear::all();
        $allData['student_shifts'] = StudentShift::all();
        $allData['student_groups'] = StudentGroup::all();
        $allData['students'] = User::where('role','user')->get();
        return view('admin.assign_student.create',$allData);
    }

    function store(Request $request)
    {
        foreach ($request->student_id as $key => $std_id) {
            $assign_student = new AssignStudent();
            $assign_student->student_class_id = intval($request->student_class_id);
            $assign_student->student_shift_id = intval($request->student_shift_id);
            $assign_student->student_group_id = intval($request->student_group_id);
            $assign_student->student_year_id = intval($request->student_year_id);
            $assign_student->student_id = intval($std_id);
            $assign_student->save();
        }
        $notification = [
            'message' => 'assgin student successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('assign_student.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $allData['assign_student'] = AssignStudent::find($request->id);
        $allData['student_classes'] = StudentClass::all();
        $allData['student_years'] = StudentYear::all();
        $allData['student_shifts'] = StudentShift::all();
        $allData['student_groups'] = StudentGroup::all();
        $allData['students'] = User::where('role', 'user')->get();
        return view('admin.assign_student.edit',$allData);
    }

    function update(Request $request)
    {
        $assign_student = AssignStudent::find($request->id);
        $assign_student->student_id = $request->student_id;
        $assign_student->student_class_id = $request->student_class_id;
        $assign_student->student_group_id = $request->student_group_id;
        $assign_student->student_shift_id = $request->student_shift_id;
        $assign_student->student_year_id = $request->student_year_id;
        $assign_student->save();
        $notification = [
            'message' => 'subject updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('assign_student.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $assign_student = AssignStudent::find($request->id);
        $assign_student->delete();
        $notification = [
            'message' => 'subject deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('assign_student.view'))->with($notification);
    }

    function show(Request $request)
    {
        $assign_students = AssignStudent::where('student_class_id', $request->id)->get();
        return view('admin.assign_student.show', ['assign_students' => $assign_students]);
    }

    function pdf_generate(Request $request)
    {
        $student = AssignStudent::find($request->id);
        $data = User::find($student->student_id);
        $data1['name'] = $data['name'];
        $data1['email'] = $data['email'];
        $data1['mobile'] = $data['mobile'];
        $data1['religion'] = $data['religion'];
        $data1['gender'] = $data['gender'];
        $data1['code'] = $data['code'];
        $data1['id_no'] = $data['id_no'];
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.user.student.student_details_pdf',$data1);
        return $pdf->stream('student.pdf');
    }
}
