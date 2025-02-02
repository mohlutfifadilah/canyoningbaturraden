<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carousel = Carousel::orderBy('created_at', 'desc')->get();
        return view('admin.carousel.index', compact('carousel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.carousel.add');
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
                'image' => 'mimes:jpeg,png,jpg|max:2048|required',
            ],
            [
                'image.mimes' => "Format image is'nt valid",
                'image.max' => 'Image file max 2 mb',
                'image.required' => 'Image file required',
            ]
        );

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Add Carousel', 'type' => 'error']);
        }

        if ($request->file('image')) {
            // Ambil ukuran file dalam bytes
            $fileSize = $request->file('image')->getSize();

            // Periksa apakah ukuran file melebihi batas maksimum (2 MB)
            if ($fileSize > 2 * 1024 * 1024) {
                // File terlalu besar, kembalikan respons dengan pesan kesalahan
                return redirect()->back()->with('image', 'Image file max 2 mb');
            }
            $file = $request->file('image');
            $image = $request->file('image')->store('carousel');
            $file->move('storage/carousel/', $image);
            $image = str_replace('carousel/', '', $image);
            // if($profil->foto){
            //     unlink(storage_path('app/kegiatan/' . $profil->nama . '/' . $profil->foto));
            //     unlink(public_path('storage/kegiatan/' . $profil->nama . '/' . $profil->foto));
            // }
        } else {
            $image = null;
        }

        Carousel::create([
            'image' => $image,
        ]);

        Alert::alert('Success', 'Carousel success added', 'success');
        return redirect()->route('carousel.index')->withSuccess('Carousel success added');
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
        $carousel = Carousel::find($id);
        return view('admin.carousel.edit', compact('carousel'));
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
        $carousel = Carousel::find($id);

        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'mimes:jpeg,png,jpg|max:2048|required',
            ],
            [
                'image.mimes' => "Format image is'nt valid",
                'image.max' => 'Image file max 2 mb',
                'image.required' => 'Image file required',
            ]
        );

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Carousel', 'type' => 'error']);
        }

        if ($request->file('image')) {
            // Ambil ukuran file dalam bytes
            $fileSize = $request->file('image')->getSize();

            // Periksa apakah ukuran file melebihi batas maksimum (2 MB)
            if ($fileSize > 2 * 1024 * 1024) {
                // File terlalu besar, kembalikan respons dengan pesan kesalahan
                return redirect()->back()->with('image', 'Image file max 2 mb');
            }
            $file = $request->file('image');
            $image = $request->file('image')->store('carousel');
            $file->move('storage/carousel/', $image);
            $image = str_replace('carousel/', '', $image);
            if ($carousel->image) {
                unlink(storage_path('app/carousel/' . $carousel->image));
                unlink(public_path('storage/carousel/' . $carousel->image));
            }
        } else {
            $image = $carousel->image;
        }

        $carousel->update([
            'image' => $image,
        ]);

        Alert::alert('Success', 'Carousel success edited', 'success');
        return redirect()->route('carousel.index')->withSuccess('Carousel success edited');
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
        $carousel = Carousel::find($id);
        // Hapus semua varian yang terkait dengan id_mobil
        // Varian::where('id_mobil', $id)->delete();
        if ($carousel->image) {
            unlink(storage_path('app/carousel/' . $carousel->image));
            unlink(public_path('storage/carousel/' . $carousel->image));
        }
        $carousel->delete();

        Alert::alert('Success', 'Carousel success deleted', 'success');
        return redirect()->route('carousel.index')->withSuccess('Carousel success deleted');
    }
}
