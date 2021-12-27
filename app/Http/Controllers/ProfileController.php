<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('myaccount.profile.index', [
            'title' => 'Profile',
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'username' => 'required|max:255',
            'name' => 'required|max:255',
            'profile_img' => 'image|file|max:1024',
        ];

        $validateData = $request->validate($rules);

        $requestFile = $request->file('profile_img');

        if ($requestFile) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['profile_img'] = $requestFile->store('profile-img');
        }

        User::where('id', Auth::user()->id)->update($validateData);

        return redirect('/myaccount/profile')->with('success', "myproduct has been updated!");
    }
}
