<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;


class AdminRegistrationController extends Controller
{
    // Show the registration form for admins
    public function showRegistrationForm()
    {
        return view('auth.adminRegister');
    }

    // Handle the registration request for admins
    public function register(Request $request)
    {
        // Validate the user input
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new admin user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        // Set the is_admin field to true for the new admin user
        $user->is_admin = true;
        $user->save();

        // Redirect the user to the dashboard
        return redirect('/dashboard');
    }
}