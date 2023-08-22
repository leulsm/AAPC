<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class ChangePasswordController extends Controller
{
    //
    public function changePassword(Request $request)
    {
        if (Auth::check()) {
            $actor = Auth::user();

            // Validate the new password...
            $validated = $request->validateWithBag('updatePassword', [
                'current_password' => ['required', 'current_password'],
                'password' => ['required', Password::defaults(), 'confirmed'],
            ]);

            // $actor->password = bcrypt($request->input('new_password'));
            // $actor->password_changed = true;

            
        $request->user()->update([
            'password' => Hash::make($validated['password']),
            'password_changed'=> true,
        ]);
            // $actor->save();

            return redirect('/dashboard')->with('success', 'Password changed successfully.');
        } else {
            return redirect('/login')->with('error', 'Please log in to change your password.');
        }
    }
}
