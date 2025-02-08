<?php

namespace App\Http\Controllers;

use App\Models\Package;
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
        return view('package-tour-detail', compact('package'));
    }
}
