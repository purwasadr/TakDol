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
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        $savedPassword = Auth::user()->password;
        $requestPassword = $request->old_password;

        if (!Hash::check($requestPassword, $savedPassword)) {
            dd('wrong_old : ' . $savedPassword . " Dan " . $requestPassword);
            return back()->with('wrong_password', "Wrong old password!");
        }

        if ($request->new_password !== $request->confirm_password) {
            dd('wrong_confim');
            return back()->with('wrong_confirm_password', "New Password and confirm password must same!");
        }


        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('myaccount/change-password')->with('success', 'Password updated!');
    }
}
