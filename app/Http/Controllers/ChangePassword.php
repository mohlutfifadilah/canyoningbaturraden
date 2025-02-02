<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ChangePassword extends Controller
{
    //
    public function change($id)
    {
        $user = User::find($id);
        return view('admin.change-password', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        // Buat custom validator rule
        Validator::extend('check_old_password', function ($attribute, $value, $parameters, $validator) use ($user) {
            return Hash::check($value, $user->password);
        });

        $validator = Validator::make(
            $request->all(),
            [
                'old_password' => 'required|check_old_password',
                'new_password' => 'required|min:8|regex:/[0-9]/',
            ],
            [
                'old_password.required' => 'Old Password required',
                'old_password.check_old_password' => 'Old Password not same',
                'new_password.required' => 'New Password required',
                'new_password.min' => 'New Password min 8 letters and numbers',
                'new_password.regex' => 'New Password must be a mixture of letters and numbers',
            ]
        );

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Change Password', 'type' => 'error']);
        }

        if ($request->new_password != $request->password_confirmation) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->with('new_password', 'New Password not same');
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        Alert::alert('Success', 'Password changed successfully ', 'success');
        return redirect()->route('profil-edit', $id)->withSuccess('Password changed successfully');
    }
}
