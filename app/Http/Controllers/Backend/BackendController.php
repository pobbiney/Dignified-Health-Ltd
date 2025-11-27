<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Resource;
use App\Models\Staff;
use App\Models\Testimonial;
use App\Models\UserfulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\Mime\Message;

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

    public function getViewMessagesView()
    {
      $list = Contact::orderBy('id','DESC')->get();

      return view('backend.ViewMessages',['list'=>$list]);
    }

    public function getResourcesView()
    {
      $list = Resource::orderBy('id','ASC')->get();
      return view('backend.Resources' ,['list'=>$list]);
    }

    public function addLinks(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'status' => 'required',
            'category' => 'required',
            
        ]);

        $insertCat =  new UserfulLink();

       
        
        $insertCat->name = $request->name;
        $insertCat->link = $request->link;
        $insertCat->category = $request->category;
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Link added successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function geteditLinksView($id)
    {
       $decodeID = Crypt::decrypt($id);
        $list = UserfulLink::orderBy('id','ASC')->get();
        $data = UserfulLink::find($decodeID);

        return view('backend.edit-links',['list'=>$list,'data'=>$data,'id'=>$id]);
    }

    public function editLinks(Request $request, $id)
    {
      $request->validate([
            'name' => 'required',
            'link' => 'required',
            'status' => 'required',
            'category'=>'required',
            
        ]);

          $decodeId = Crypt::decrypt($id);
         $insertCat =  UserfulLink::find($decodeId);

         
        
        $insertCat->name = $request->name;
         $insertCat->link = $request->link;
         $insertCat->category = $request->category;
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Link updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function destroyLinks($id)
    {
        UserfulLink ::where('id',$id)->delete();
        return redirect('Links')->with('message_success','Link deleted successfully!');
    }

    public function getLinksView()
    {
      $list = UserfulLink::orderBy('id','ASC')->get();
      return view('backend.Links' ,['list'=>$list]);
    }

     public function addResource(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'document' => 'required',
            'status' => 'required',
            
        ]);

        $insertCat =  new Resource();

         if($request->hasFile('document')){
            $file = $request->file('document');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/resources/',$filename);
            $insertCat->document = 'uploads/resources/'.$filename;
          }
        
        $insertCat->name = $request->name;
        
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Document uploaded successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function getEditResourceView($id)
    {
       $decodeID = Crypt::decrypt($id);
        $list = Resource::orderBy('id','ASC')->get();
        $data = Resource::find($decodeID);

        return view('backend.edit-resources',['list'=>$list,'data'=>$data,'id'=>$id]);
    }

    public function editResource(Request $request, $id)
    {
      $request->validate([
            'name' => 'required',
            
            'status' => 'required',
            
        ]);

          $decodeId = Crypt::decrypt($id);
         $insertCat =  Resource::find($decodeId);

         if($request->hasFile('document')){
            $file = $request->file('document');
            $ext = $file->getClientOriginalExtension();
            $filename =time().'.'.$ext;
            $file->move('uploads/resources/',$filename);
            $insertCat->document = 'uploads/resources/'.$filename;
          }
        
        $insertCat->name = $request->name;
        
        $insertCat->status = $request->status;
         
     
        $insertCat->save();

       return $insertCat ? back()->with('message_success','Document updated successfully') : back()->with('message_error','Something went wrong, please try again.');
    }

    public function destroyresources($id)
    {
        Resource ::where('id',$id)->delete();
        return redirect('Resources')->with('message_success','Document deleted successfully!');
    }
}
