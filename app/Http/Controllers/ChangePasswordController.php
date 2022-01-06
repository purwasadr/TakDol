<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{

    public function index()
    {
        return view('myaccount.change-password', [
            'title' => 'Change Password'
        ]);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:5',
            'confirm_password' => 'required|min:5'
        ]);

        $savedPassword = Auth::user()->password;
        $requestPassword = $request->old_password;

        if (!Hash::check($requestPassword, $savedPassword)) {
            // dd('wrong_old : ' . $savedPassword . " Dan " . $requestPassword);
            return back()->with('error', "Wrong old password!");
        }

        if ($request->new_password !== $request->confirm_password) {
            // dd('wrong_confim');
            return back()->with('error', "New Password and confirm password must same!");
        }


        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('myaccount/change-password')->with('success', 'Password updated!');
    }
}
