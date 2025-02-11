<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Photo;
use Illuminate\Http\Request;

class PackageTourController extends Controller
{
    //
    public function index(){
        $package = Package::all();
        return view('package-tour', compact('package'));
    }

    public function detail($id){
        $package = Package::find($id);
        $photo = Photo::where('id_package', $id)->get();
        return view('package-tour-detail', compact('package', 'photo'));
    }
}
