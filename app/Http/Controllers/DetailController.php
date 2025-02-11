<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $package = Package::orderBy('created_at', 'desc')->get();
        return view('admin.detailPackage.index', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $package = Package::find($id);
        return view('admin.detailPackage.show', compact('package'));
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
        $package = Package::find($id);
        return view('admin.detailPackage.edit', compact('package'));
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
        $package = Package::find($id);
        $validator = Validator::make(
            $request->all(),
            [
                'min_age' => 'required',
                // 'include' => 'required',
            ],
            [
                'min_age.required' => 'Minimum Age required',
                // 'include.required' => 'Include required',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
            ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Detail', 'type' => 'error']);
        }

        $package->update([
            'min_age' => $request->min_age,
            'swing_change' => $request->swing_change,
            'jump_change' => $request->jump_change,
            'slide_change' => $request->slide_change,
            'swim_change' => $request->swim_change,
            // 'include' => $request->include,
            'description' => $request->description,
        ]);

        Alert::alert('Success', 'Detail success edited', 'success');
        return redirect()->route('detailPackage.index')->withSuccess('Detail success edited');
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
        $package = Package::find($id);
        // Hapus semua varian yang terkait dengan id_mobil
        // Varian::where('id_mobil', $id)->delete();
        if ($package->photo) {
            unlink(storage_path('app/photo-package/' . $package->photo));
            unlink(public_path('storage/photo-package/' . $package->photo));
        }
        $package->delete();

        Alert::alert('Success', 'Detail success deleted', 'success');
        return redirect()->route('detailPackage.index')->withSuccess('Detail success deleted');
    }
}
