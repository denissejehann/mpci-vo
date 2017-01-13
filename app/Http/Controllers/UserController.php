<?php

namespace VirtualOffice\Http\Controllers;

use Illuminate\Http\Request;
use VirtualOffice\Models\User;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function usersList()
    {
        $users = User::all();

        return view('pages.users.list', compact('users'));
    }

    public function addUser()
    {
        return view('pages.users.add');
    }

    public function addUserSave(Request $request)
    {
        // validate request
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // save
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // return to list of users
        return redirect()->route('users.list');
    }

    public function userProfile($id)
    {
        $data['user'] = User::findOrFail($id);

        return view('pages.users.profile', $data);
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.list');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);

        return view('pages.users.edit', compact('user'));
    }

    public function editUserSave($id, Request $request)
    {
        $user = User::findOrFail($id);

        $password = $request->has('password') ? bcrypt($request->password) : $user->password;
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'email' => $request->email,
            'password' => $password
        ]);

        return redirect()->route('users.list');
    }

}