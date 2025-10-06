<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request){
        $Data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8',
        ]);

        $newUser = User::create($Data);
        return redirect(route('crud.index'));
    }

    public function edit(User $user){
        return view('dashboard.editUsers', ['user' => $user]);
    }

    public function update(user $user, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
                'email'
            ],
            'password' => 'nullable|string|min:8',
        ]);

        $user->update($data);
        return redirect(route('crud.index'))->with('success', 'user Updated Successfully');
    }

    public function delete(user $user){
        $user->delete();
        return redirect(route('crud.index'))->with('success', 'user Deleted Successfully');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('crud.index'));
        }

        return back()->withErrors([
            'email' => 'Email doesnt exist',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('crud.login'));
    }
}