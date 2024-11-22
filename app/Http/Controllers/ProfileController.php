<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profile.index', compact('users'));
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role_id' => 'required|exists:role,id',
            'gender_id' => 'required|exists:gender,id',
        ]);

        $user = Auth::user();

        return redirect()->route('profile.edit', compact('user'))->with('success', 'Profile updated successfully');
    }
}
