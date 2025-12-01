<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Resource;
use App\Models\Staff;
use App\Models\Testimonial;
use App\Models\UserfulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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

    public function getForStaffView(){
        return view('frontend.for-staff');
    }

    public function getForEmployersView()
    {
        return view('frontend.for-employers');
    }

    public function getContactView()
    {
        return view('frontend.contact-us');
    }

    public function SendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'name' => 'required',
            'telephone' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            
            
        ]);
        $insertCat =  new Contact();
        $insertCat->name = $request->name;
        $insertCat->message = $request->message;
        $insertCat->subject = $request->subject;
        $insertCat->email = $request->email;
        $insertCat->telephone = $request->telephone;
     
        $insertCat->save();

       
       return $insertCat ? back()->with('message_success','Message submitted successfully, Thank you !') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function getresourcesView()
    {
        $listdoc = Resource::orderBy('id','ASC')->get();
        $listlinkstaff = UserfulLink::where('category','Staff')->get();
         $listlinkemp = UserfulLink::where('category','Employer')->get();
        return view('frontend.resources',
        [
            'listdoc'=>$listdoc,
            'listlinkstaff'=>$listlinkstaff,
            'listlinkemp'=>$listlinkemp
        ]
    
    );
    }

    public function getteamView($id)
    {
        $decodeID = Crypt::decrypt($id);
        $list = Staff::orderBy('staff_id','ASC')->get();
        $data = Staff::find($decodeID);
        return view('frontend.team-profile',
        ['list'=>$list,'data'=>$data,'id'=>$id]
    
     );
    }
}
