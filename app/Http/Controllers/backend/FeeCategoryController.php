<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use Illuminate\Http\Request;

class FeeCategoryController extends Controller
{
    function index()
    {
        $fee_categories = FeeCategory::all();
        return view('admin.fee_category.fee_category', ['fee_categories' => $fee_categories]);
    }

    function create()
    {
        return view('admin.fee_category.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:fee_categories'
        ]);
        $fee_category = new FeeCategory();
        $fee_category->name = $request->name;
        $fee_category->save();
        $notification = [
            'message' => 'fee category inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('fee_category.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $fee_category = FeeCategory::find($request->id);
        return view('admin.fee_category.edit', ['fee_category' => $fee_category]);
    }

    function update(Request $request)
    {
        $fee_category = FeeCategory::find($request->id);
        $fee_category->name = $request->name;
        $fee_category->save();
        $notification = [
            'message' => 'fee category updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('fee_category.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $fee_category = FeeCategory::find($request->id);
        $fee_category->delete();
        $notification = [
            'message' => 'fee category deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('fee_category.view'))->with($notification);
    }
}
