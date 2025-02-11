<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PackageController extends Controller
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
        return view('admin.package.index', compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.package.add');
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
                'name' => 'required',
                'location' => 'required',
                'level' => 'required',
                'experience' => 'required',
                'fitness' => 'required',
                'swimming_abilities' => 'required',
                'time' => 'required',
                'approach' => 'required',
                'return' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Package Name required',
                'location.required' => 'Location required',
                'level.required' => 'Canyoning Level required',
                'experience.required' => 'Experience Level required',
                'fitness.required' => 'Fitness required',
                'swimming_abilities.required' => 'Swimming Abilities required',
                'time.required' => 'Time in Canyon required',
                'approach.required' => 'Approach required',
                'return.required' => 'Return required',
                'price.required' => 'Price required',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Add Package', 'type' => 'error']);
        }

        Package::create([
            'name' => $request->name,
            'location' => $request->location,
            'level' => $request->level,
            'experience' => $request->experience,
            'fitness' => $request->fitness,
            'swimming_abilities' => $request->swimming_abilities,
            'time' => $request->time,
            'approach' => $request->approach,
            'return' => $request->return,
            'price' => $request->price,
        ]);

        Alert::alert('Success', 'Package success added', 'success');
        return redirect()->route('package.index')->withSuccess('Package success added');
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
        $package = Package::find($id);
        return view('admin.package.edit', compact('package'));
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
                'name' => 'required',
                'location' => 'required',
                'level' => 'required',
                'experience' => 'required',
                'fitness' => 'required',
                'swimming_abilities' => 'required',
                'time' => 'required',
                'approach' => 'required',
                'return' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Package Name required',
                'location.required' => 'Location required',
                'level.required' => 'Canyoning Level required',
                'experience.required' => 'Experience Level required',
                'fitness.required' => 'Fitness required',
                'swimming_abilities.required' => 'Swimming Abilities required',
                'time.required' => 'Time in Canyon required',
                'approach.required' => 'Approach required',
                'return.required' => 'Return required',
                'price.required' => 'Price required',
            ]
        );
        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Package', 'type' => 'error']);
        }

        $package->update([
            'name' => $request->name,
            'location' => $request->location,
            'level' => $request->level,
            'experience' => $request->experience,
            'fitness' => $request->fitness,
            'swimming_abilities' => $request->swimming_abilities,
            'time' => $request->time,
            'approach' => $request->approach,
            'return' => $request->return,
            'price' => $request->price,
        ]);

        Alert::alert('Success', 'Package success edited', 'success');
        return redirect()->route('package.index')->withSuccess('Package success edited');
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
        // if ($package->photo) {
        //     unlink(storage_path('app/photo-package/' . $package->photo));
        //     unlink(public_path('storage/photo-package/' . $package->photo));
        // }
        $package->delete();

        Alert::alert('Success', 'Package success deleted', 'success');
        return redirect()->route('package.index')->withSuccess('Package success deleted');
    }
}
