<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class FrontendController extends Controller
{
    public function gethomeView()
    {
        $list = Staff::all();
        $testimonial = Testimonial::orderBy('id', 'ASC')->get();
        return view('frontend.home',['list'=>$list,'testimonial'=>$testimonial]);
    }

    public function getAboutView(){
         $list = Staff::all();
        return view('frontend.about-us',['list'=>$list]);
    }

    public function getServiceView()
    {
        return view('frontend.our-services');
    }
}
