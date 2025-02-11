<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photo = Photo::orderBy('created_at', 'desc')->get();
        return view('admin.photo.index', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $package = Package::all();
        return view('admin.photo.add', compact('package'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            $request->all(),
            [
                'id_package' => 'required',
                'photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'id_package.required' => 'Package required',
                'photo.mimes' => "Format Photo is'nt not valid",
                'photo.max' => 'Image Photo max 2 mb',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
            ->withInput()->with(['status' => "There's an error", 'title' => 'Add Photo', 'type' => 'error']);
        }
        $package = Package::find($request->id_package);
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $image = $request->file('photo')->store('photo-package');
            $file->move('storage/photo-package/', $image);
            $image = str_replace('photo-package/', '', $image);
            // if($profil->foto){
            //     unlink(storage_path('app/kegiatan/' . $profil->nama . '/' . $profil->foto));
            //     unlink(public_path('storage/kegiatan/' . $profil->nama . '/' . $profil->foto));
            // }
        } else {
            $image = null;
        }

        Photo::create([
            'id_package' => intval($request->id_package),
            'image' => $image,
        ]);

        Alert::alert('Success', 'Photo success added', 'success');
        return redirect()->route('photo.index')->withSuccess('Photo success added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $photo = Photo::find($id);
        $package = Package::all();
        return view('admin.photo.edit', compact('photo', 'package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $photo = Photo::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'id_package' => 'required',
                'photo' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'id_package.required' => 'Package required',
                'photo.mimes' => "Format Photo is'nt not valid",
                'photo.max' => 'Photo file max 2 mb',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
            ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Photo', 'type' => 'error']);
        }

        if ($request->file('photo')) {
            // Ambil ukuran file dalam bytes
            $fileSize = $request->file('photo')->getSize();

            // Periksa apakah ukuran file melebihi batas maksimum (2 MB)
            if ($fileSize > 2 * 1024 * 1024) {
                // File terlalu besar, kembalikan respons dengan pesan kesalahan
                return redirect()->back()->with('photo', 'Photo file max 2 mb');
            }
            $file = $request->file('photo');
            $image = $request->file('photo')->store('photo-package');
            $file->move('storage/photo-package/', $image);
            $image = str_replace('photo-package/', '', $image);
            if ($photo->image) {
                unlink(storage_path('app/photo-package/' . $photo->image));
                unlink(public_path('storage/photo-package/' . $photo->image));
            }
        } else {
            $image = $photo->image;
        }

        $photo->update([
            'id_package' => $request->id_package,
            'image' => $image,
        ]);

        Alert::alert('Success', 'Photo success edited', 'success');
        return redirect()->route('photo.index')->withSuccess('Photo success edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $photo = Photo::find($id);
        // Hapus semua varian yang terkait dengan id_mobil
        // Varian::where('id_mobil', $id)->delete();
        if ($photo->image) {
            unlink(storage_path('app/photo-package/' . $photo->image));
            unlink(public_path('storage/photo-package/' . $photo->image));
        }
        $photo->delete();

        Alert::alert('Success', 'Photo success deleted', 'success');
        return redirect()->route('photo.index')->withSuccess('Photo success deleted');
    }
}
