<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BackendController extends Controller
{
    public function getTestimonialView()
    {
        $list = Testimonial::all();
        return view('backend.Testimonial',
      ['list'=>$list]
    );
    }

    public function addTestimonial(Request $request)
    {
          $request->validate([
            'message' => 'required',
            'name' => 'required',
            'status' => 'required',
            
            
        ]);
        $insertCat =  new Testimonial();
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/testimonial/',$filename);
            $insertCat->photo = 'uploads/testimonial/'.$filename;
          }
        
        $insertCat->name = $request->name;
        $insertCat->message = $request->message;
        $insertCat->status = $request->status;
     
        $insertCat->save();

       
       return $insertCat ? back()->with('message_success','Testimonial   added successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

      public function gettestimonialID($id)
    {
        $data = Testimonial::find($id);
        return response()->json($data);
   
    
    }

     public function editTestimonial(Request $request){
          $request->validate([
            'message' => 'required',
            'name' => 'required',
            'status' => 'required',
            
            
        ]);
   
         $insertCat =  Testimonial::find($request->testimonial_id);
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/testimonial/',$filename);
            $insertCat->photo = 'uploads/testimonial/'.$filename;
          }
        
        $insertCat->name = $request->name;
        $insertCat->message = $request->message;
        $insertCat->status = $request->status;
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Testimonial updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

      public function destroytestimonial(string $id)
    {
        Testimonial ::where('id',$id)->delete();
        return redirect('Testimonial')->with('message_success','Testimonial deleted successfully!');
    }

    public function getStaffView()
    {
        return view('backend.Staff');
    }

    public function addStaff(Request $request)
    {
         $request->validate([
            'surname' => 'required',
            'firstname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'profile' => 'required',
            'status' => 'required',
        ]);

        $insertCat =  new Staff();

         if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/staff/',$filename);
            $insertCat->picture = 'uploads/staff/'.$filename;
          }
        
        $insertCat->surname = $request->surname;
        $insertCat->firstname = $request->firstname;
        $insertCat->othername = $request->othername;
        $insertCat->gender = $request->gender;
        $insertCat->position = $request->position;
        $insertCat->phone = $request->phone;
        $insertCat->email = $request->email;
        $insertCat->profile = $request->profile;
        $insertCat->dob = $request->dob;
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Staff added successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function getStaffListView()
    {
        $list = Staff::all();
        return view('backend.list-staff',
         ['list'=>$list]
    );
    }

    public function editStaffView($id)
    {
         $decodeID = Crypt::decrypt($id);
        $list = Staff::orderBy('staff_id','ASC')->get();
        $data = Staff::find($decodeID);

        return view('backend.edit-staff',['list'=>$list,'data'=>$data,'id'=>$id]);
    }

    public function editStaff(Request $request, $id)

    {
         $request->validate([
            'surname' => 'required',
            'firstname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'position' => 'required',
            'profile' => 'required',
            'status' => 'required',
        ]);

       $decodeId = Crypt::decrypt($id);
         $insertCat =  Staff::find($decodeId);

         if($request->hasFile('photo')){
            $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/staff/',$filename);
            $insertCat->picture = 'uploads/staff/'.$filename;
          }
        
        $insertCat->surname = $request->surname;
        $insertCat->firstname = $request->firstname;
        $insertCat->othername = $request->othername;
        $insertCat->gender = $request->gender;
        $insertCat->position = $request->position;
        $insertCat->phone = $request->phone;
        $insertCat->email = $request->email;
        $insertCat->profile = $request->profile;
        $insertCat->dob = $request->dob;
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Staff updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }
}
