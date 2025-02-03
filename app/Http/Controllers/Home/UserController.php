<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(15);

        return view('home.user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('home.user.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $validated_data = $request->validated();
        $validated_data['password'] = Hash::make($request->password);
        User::create($validated_data);

        return to_route('home.users.index')->with('message', 'User Created !');
    }

    public function edit(User $user)
    {
        $roles = Role::all();

        return view('home.user.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $validated = $request->validate(['role_id' => 'required|exists:roles,id']);
        $user->role_id = $validated['role_id'];
        $user->update();

        return to_route('home.users.index')->with('message','Role to user Updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return to_route('home.users.index')->with('message', 'User Deleted !');
    }
}
