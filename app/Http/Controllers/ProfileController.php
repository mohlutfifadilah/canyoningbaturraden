<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    //
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.profile-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);

        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'no_whatsapp' => 'required',
                'instagram' => 'required',
                'tiktok' => 'required',
            ],
            [
                'name.required' => 'Name required',
                'email.required' => 'Email required',
                'no_whatsapp.required' => 'Whatsapp required',
                'instagram.required' => 'Instagram required',
                'tiktok.required' => 'TikTok required',
            ]
        );

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Profile', 'type' => 'error']);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->route('profil-edit', $id)->with('email', "Format Email is'nt valid");
        }

        if ($request->email != $user->email) {
            if (User::where('email', $request->email)->exists()) {
                Alert::alert('Error', "There's an error", 'error');
                return redirect()->back()->withInput()->with('email', 'Email already in use!');
            }
        }

        if ($request->no_whatsapp != $user->no_whatsapp) {
            if (User::where('no_whatsapp', $request->no_whatsapp)->exists()) {
                Alert::alert('Error', "There's an error", 'error');
                return redirect()->back()->withInput()->with('no_whatsapp', 'No Whatsapp already in use!');
            }
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_whatsapp' => $request->no_whatsapp,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok,
        ]);

        Alert::alert('Success', 'Edit Profile Success ', 'success');
        return redirect()->route('profil-edit', $id)->withSuccess('Edit Profile Success');
    }
}
