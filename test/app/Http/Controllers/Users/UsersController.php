<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    // CRUD - Create Read Update Delete to users
    // Read
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    // Create
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {

        //create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        //redirect to users index
        return redirect()->route('users.index');

    }

    // Update
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    // Delete
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
