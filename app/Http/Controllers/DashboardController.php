<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Package;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $package = Package::limit(3)->get();
        $faq = Faq::limit(3)->get();
        $testimonial = Testimoni::limit(3)->get();
        return view('admin.dashboard', compact('package', 'faq', 'testimonial'));
    }
}
