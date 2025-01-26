<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimoni = Testimoni::orderBy('created_at', 'desc')->get();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimoni.add');
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'from' => 'required',
            'message' => 'required',
        ],
        [
            'name.required' => 'Name required',
            'from.required' => 'From required',
            'message.required' => 'Message required',
        ]);

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Add Testimonil', 'type' => 'error']);
        }

        Testimoni::create([
            'name' => $request->name,
            'from' => $request->from,
            'message' => $request->message,
        ]);

        Alert::alert('Success', 'Testimonial success added', 'success');
        return redirect()->route('testimoni.index')->withSuccess('Testimonial success added');
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
        $testimoni = Testimoni::find($id);
        return view('admin.testimoni.edit', compact('testimoni'));
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
        $testimoni = Testimoni::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'from' => 'required',
            'message' => 'required',
        ],
        [
            'name.required' => 'Name required',
            'from.required' => 'From required',
            'message.required' => 'Message required',
        ]);

        if ($validator->fails()) {
            Alert::alert('Error', "There's an error", 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Edit Testimonial', 'type' => 'error']);
        }

        $testimoni->update([
            'name' => $request->name,
            'from' => $request->from,
            'message' => $request->message,
        ]);

        Alert::alert('Success', 'Testimonial success edited', 'success');
        return redirect()->route('testimoni.index')->withSuccess('Testimonial success edited');
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
        $testimoni = Testimoni::find($id);
        $testimoni->delete();

        Alert::alert('Success', 'Testimonial success deleted', 'success');
        return redirect()->route('testimoni.index')->withSuccess('Testimonial success deleted');
    }
}
