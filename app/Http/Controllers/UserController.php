<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    //
		
		public function profile()
    {
				return view('user.profile', array('user' => Auth::user()) );
    }
		
		public function update_avatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('public/avatars', $avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success', 'You have successfully upload image.');

    }
    
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:6|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('users')->with('success','User created successfully!');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:6|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users'
        ]);
        $post->username = $request->username;
        $post->name = $request->name;
        $post->email = $request->email;

        $post->save();
        return redirect()->route('users')->with('success','User updated successfully!');
    }

    public function destroy(User $user)
    {
        $post->delete();
        return redirect()->route('users')->with('success','User deleted successfully!');
    }
}
