<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use App\Models\FeeCategoryAmount;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class FeeCategoryAmountController extends Controller
{
    function index()
    {
        $fee_category_amounts = FeeCategoryAmount::select(['fee_category_id'])->groupBy(['fee_category_id'])->get();
        return view('admin.fee_category_amount.fee_category_amount', ['fee_category_amounts' => $fee_category_amounts]);
    }

    function create()
    {
        $student_classes = StudentClass::all();
        $fee_categories = FeeCategory::all();
        return view('admin.fee_category_amount.create',['student_classes'=>$student_classes,'fee_categories'=>$fee_categories]);
    }

    function store(Request $request)
    {
        foreach ($request->amount as $key => $amount) {
            $fee_category_amount = new FeeCategoryAmount();
            $fee_category_amount->amount = $amount;
            $fee_category_amount->student_class_id = intval($request->student_class_id[$key]);
            $fee_category_amount->fee_category_id = intval($request->fee_category_id);
            $fee_category_amount->save();
        }
        $notification = [
            'message' => 'fee category amount inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('fee_category_amount.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $fee_category_amount = FeeCategoryAmount::find($request->id);
        $fee_category = FeeCategory::find($fee_category_amount->fee_category_id);
        $fee_categories = FeeCategory::all();
        $student_class = StudentClass::find($fee_category_amount->student_class_id);
        $student_classes = StudentClass::all();
        return view('admin.fee_category_amount.edit', [
            'fee_category_amount' => $fee_category_amount,
            'fee_category' => $fee_category,
            'student_class' => $student_class,
            'student_classes' => $student_classes,
            'fee_categories' => $fee_categories
        ]);
    }

    function update(Request $request)
    {
        $fee_category_amount = FeeCategoryAmount::find($request->id);
        $fee_category_amount->amount = $request->amount;
        $fee_category_amount->fee_category_id = $request->fee_category_id;
        $fee_category_amount->student_class_id = $request->student_class_id;
        $fee_category_amount->save();
        $notification = [
            'message' => 'fee category amount updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('fee_category_amount.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $fee_category_amount = FeeCategoryAmount::find($request->id);
        $fee_category_amount->delete();
        $notification = [
            'message' => 'fee category amount deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('fee_category_amount.view'))->with($notification);
    }

    function show(Request $request){
        $fee_category_amounts = FeeCategoryAmount::where('fee_category_id',$request->id)->get();
        return view('admin.fee_category_amount.show',['fee_category_amounts'=>$fee_category_amounts]);
    }
}
