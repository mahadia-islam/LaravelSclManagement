<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    function index()
    {
        $designations = Designation::all();
        return view('admin.designation.designation', ['designations' => $designations]);
    }

    function create()
    {
        return view('admin.designation.create');
    }

    function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|unique:fee_categories'
        ]);
        $designation = new Designation();
        $designation->name = $request->name;
        $designation->save();
        $notification = [
            'message' => 'designation inserted successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('designation.view'))->with($notification);
    }

    function edit(Request $request)
    {
        $designation = Designation::find($request->id);
        return view('admin.designation.edit', ['designation' => $designation]);
    }

    function update(Request $request)
    {
        $designation = Designation::find($request->id);
        $designation->name = $request->name;
        $designation->save();
        $notification = [
            'message' => 'designation updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('designation.view'))->with($notification);
    }

    function delete(Request $request)
    {
        $designation = Designation::find($request->id);
        $designation->delete();
        $notification = [
            'message' => 'designation deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('designation.view'))->with($notification);
    }
}
