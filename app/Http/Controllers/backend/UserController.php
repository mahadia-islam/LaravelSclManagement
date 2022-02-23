<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function index(){
        $allUser['allData'] = User::where('role','admin')->get();
        return view('admin.user.user',$allUser);
    }

    function show_create(){
        return view('admin.user.create');
    }

    function store(Request $request){
        $validate = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required'
        ]);
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        $data->save();

        $notification = array(
            'message' => 'user inserted successfully',
            'alert-type' => 'success'
        );

        return Redirect(route('user.view'))->with($notification);
    }

    function destroy(Request $request){
        $user = User::find($request->id);
        $user->delete();
        $notification = [
            'message' => 'User deleted successfully',
            'alert-type' => 'error'
        ];
        return Redirect(route('user.view'))->with($notification);
    }

    function edit(Request $request){
        $user = User::find($request->id);
        $allData['user'] = $user;
        return view('admin.user.edit',$allData);
    }

    function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        $notification = [
            'message' => 'User updated successfully',
            'alert-type' => 'info'
        ];
        return Redirect(route('user.view'))->with($notification);
    }

    function profile(){
        $user = Auth::user();
        $allData['user'] = $user;
        return view('admin.user.profile',$allData);
    }

    function reset_password(){
        return view('admin.user.reset');
    }

    function update_password(Request $request){
        $user = Auth::user();
        $password = Hash::check($request->current_password, $user['password']);
        if(!$password){
            $notification = [
                'message' => $user['password'],
                'alert-type' => 'warning'
            ];
            return Redirect(route('user.reset_password'))->with($notification);
        }
        if($request->password !== $request->confirm_password){
            $notification = [
                'message' => 'password do not match to confirm password',
                'alert-type' => 'warning'
            ];
            return Redirect(route('user.reset_password'))->with($notification);
        }
        $theUser = User::find($user['id']);
        $theUser->password = Hash::make($request->password);
        $theUser->save();
        $notification = [
            'message' => 'Password changed successfully',
            'alert-type' => 'success'
        ];
        return Redirect(route('user.reset_password'))->with($notification);
    }
}
