<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faq = Faq::orderBy('created_at', 'desc')->get();
        return view('admin.faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.faq.add');
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
            'question' => 'required',
            'answer' => 'required',
        ],
        [
            'question.required' => 'Question required',
            'answer.required' => 'Answer required',
        ]);

        if ($validator->fails()) {
            Alert::alert('Kesalahan', 'Terjadi Kesalahan ', 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Add FAQ', 'type' => 'error']);
        }

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        Alert::alert('Success', 'FAQ success added', 'success');
        return redirect()->route('faq.index')->withSuccess('FAQ success added');
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
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
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
        $faq = Faq::find($id);

        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer' => 'required',
        ],
        [
            'question.required' => 'Question required',
            'answer.required' => 'Answer required',
        ]);

        if ($validator->fails()) {
            Alert::alert('Kesalahan', 'Terjadi Kesalahan ', 'error');
            return redirect()->back()->withErrors($validator)
                ->withInput()->with(['status' => "There's an error", 'title' => 'Add FAQ', 'type' => 'error']);
        }

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        Alert::alert('Success', 'FAQ success edited ', 'success');
        return redirect()->route('faq.index')->withSuccess('FAQ success edited');
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
        $faq = Faq::find($id);
        $faq->delete();

        Alert::alert('Success', 'FAQ success deleted ', 'success');
        return redirect()->route('faq.index')->withSuccess('FAQ success deleted');
    }
}
