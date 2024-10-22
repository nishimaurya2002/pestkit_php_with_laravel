<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Slider;
use App\Models\service;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Contact;
use Hash;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function usersForm(){
        return view('admin.add-users');
    }
    public function postUsers(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users",
            "phone"=>"required|min:10|max:12",
            "password"=>"required|min:8",
            "role"=>"required",
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->withSuccess('Users Created Successfully');
    }
    public function getUsers(){
        $user = User::paginate(10);
        return view('admin.users',['users'=>$user]);
    }
    public function updateUsers(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                "name"=>"required",
                "email"=>"required|email",
                "phone"=>"required|min:10|max:12",
                "role"=>"required",
            ]);
            $user=User::find($req->id);
            $user->name= $req->name;
            $user->email= $req->email;
            $user->phone= $req->phone;
            $user->password= Hash::make($req->password);
            $user->role= $req->role;
            $user->Save();
            return redirect()->route('get-users')->withSuccess('Users Updated successfully');
        }else{
            $user= User::where('id',$req->id)->first();
            return view('admin.update-users',['user'=>$user]);
        }

    }
    public function deleteUsers(Request $req){
      User::where('id',$req->id)->delete();
      return redirect()->back()->withSuccess('Users Deleted successfully');
    }

    // --------------------------------sliderform----------------------------------------------------

    public function sliderForm(){
        return view('admin.add-slider');
    }
    public function postSlider(Request $req){
        $req->validate([
            'heading'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);

        $slider= new Slider;
        $slider->heading= $req->heading;
        $slider->description=$req->description;
        $image=$req->file('image')->store('slider','public');
        $slider->image=$image;
        $slider->save();
        return redirect()->back()->withSuccess('Slider Added Successfully');
    }
    public function getSlider(){
        $slider = Slider::paginate(10);
        return view('admin.slider',['slider'=>$slider]);
    }
    public function deleteSlider(Request $req){
        Slider::where('id',$req->id)->delete();
        return redirect()->back()->withSuccess('Slider Deleted successfully');
      }


      //---------------------------------- services ---------------------------------------------------

    public function serviceForm(){
        return view('admin.add-service');
    }
    public function postService(Request $req){
        $req->validate([
            'heading'=>'required',
            'description'=>'required',
            // 'image'=>'required'
        ]);

        $service= new service;
        $service->heading= $req->heading;
        $service->description=$req->description;
        // $images=$req->file('image')->store('service','public');
        // $service->image=$images;
        $service->save();
        return redirect()->back()->withSuccess('Service Added Successfully');
    }
        // if($req->isMethod('post')){
        //     $req->validate([
        //         'heading'=>'required',
        //         'description'=>'required',
        //         'image'=>'required'
        //     ]);
        //     foreach($req->images as $image){
        //        $images[]=$image->store('service','public');
        //     }
        //     $service= new service;
        //     $service->heading= $req->heading;
        //     $service->description=$req->description;
        //     $service->image=json_encode($images);
        //     $service->save();
        //      return redirect()->back()->withSuccess('service Added Successfully');
        // }else{
        //     return view('admin.service');
        // }
    // }
    
      public function getService(){
        $service = service::paginate(10);
        return view('admin.service',['service'=>$service]);
    }
    //   public function getServicefront(){
    //     $service = service::all();
    //     return view('service',['service'=>$service]);
    //     // return $service;
    // }
    public function updateService(Request $req){
       
            if($req->isMethod('post')){
            $req->validate([
                'heading'=>'required',
                'description'=>'required',
                // 'image'=>'required'
            ]);
            // $images="";
            // if($req->hasfile('image')){
            //     $images=$req->file('image')->store('service','public');
            // }
            $service=service::find($req->id);
            $service->heading= $req->heading;
            $service->description=$req->description;
            // $service->image= $images ? $images : $service->image;
            $service->save();
             return redirect()->route('get-service')->withSuccess('Service updated Successfully');
        }else{
            $service= service::find($req->id);
            return view('admin.update-service',['service'=>$service]);
        }

        // if($req->isMethod('post')){
        //     $req->validate([
        //         'heading'=>'required',
        //         'description'=>'required',
        //         'image'=>'required'
        //     ]);
        //     $image=[];
        //     if($req->hasfile('image')){
        //         foreach($req->images as $image){
        //         $images=$image->store('service','public');
        //         }
        //     }
        //     $service=service::find($req->id);
        //     $service->heading= $req->heading;
        //     $service->description=$req->description;
        //     $service->image=$images ? json_encode($images) : $service->images;
        //     $service->save();
        //      return redirect()->route('get-service')->withSuccess('service updated Successfully');
        // }else{
        //     $service= service::find('id',$req->id);
        //     return view('admin.update-service',['service'=>$service]);
        // }

    }

    public function deleteService(Request $req){
        service::where('id',$req->id)->delete();
        return redirect()->back()->withSuccess('Service Deleted successfully');
      }


  // ---------------------------------------------our project-------------------------------

    public function getProject(){
    $project = Project::paginate(10);
    return view('admin.project',['project'=>$project]);
    }

    // public function getProjectfront(){
    //     $project=Project::all();
    //     return view('project',['project'=>$project]);
    // }

    public function projectForm(){
    return view('admin.add-project');
    }
    public function postProject(Request $req){
    $req->validate([
        'category'=>'required',
        'image'=>'required'
    ]);

    $project= new Project;
    $project->category= $req->category;
    $images=$req->file('image')->store('project','public');
    $project->image=$images;
    $project->save();
    return redirect()->back()->withSuccess('Project Added Successfully');
    }

    public function updateProject(Request $req){
        if($req->isMethod('post')){
        $req->validate([
            'category'=>'required',
            'image'=>'required'
        ]);
        $images="";
        if($req->hasfile('image')){
            $images=$req->file('image')->store('project','public');
        }
        $project=Project::find($req->id);
        $project->category= $req->category;
        $project->image= $images ? $images : $project->image;
        $project->save();
         return redirect()->route('get-project')->withSuccess('Project updated Successfully');
    }else{
        $project= Project::find($req->id);
        return view('admin.update-project',['project'=>$project]);
    }
   }
   
   public function deleteProject(Request $req){
    Project::where('id',$req->id)->delete();
    return redirect()->back()->withSuccess('Project Deleted successfully');
  }
  //===================================Blog==================================================
  public function blogForm(){
    return view('admin.add-blog');
    }
    public function getBlog(){
        $blog = Blog::paginate(10);
        return view('admin.blog',['blog'=>$blog]);
    }
    public function postBlog(Request $req){
            $req->validate([
                'heading'=>'required',
                'description'=>'required',
                'image'=>'required',
                'date'=>'required',
                "role"=>"required",
            ]);
           $blog=new Blog;
           $blog->heading=$req->heading;
           $blog->description=$req->description;
           $images=$req->file('image')->store('blog','public');
           $blog->image=$images;
           $blog->date=$req->date;
           $blog->role=$req->role;
           $blog->save();
           return redirect()->back()->withSuccess('Blog Add Data successfully');
        }

        
    public function updateBlog(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                'heading'=>'required',
                'description'=>'required',
                'image'=>'required',
                'date'=>'required',
                "role"=>"required",
            ]);
            $images="";
            if($req->hasfile('image')){
                $images=$req->file('image')->store('blog','public');
            }
            $blog= Blog::find($req->id);
            $blog->heading=$req->heading;
            $blog->description=$req->description;
            $blog->image= $images ? $images : $blog->image;
            $blog->date=$req->date;
            $blog->role=$req->role;
            $blog->save();
            return redirect()->route('get-blog')->withSuccess('Blog updated Successfully');
        }else{
            $blog= Blog::find($req->id);
            return view('admin.update-blog',['blog'=>$blog]);
        }
    }

    public function deleteBlog(Request $req){
        Blog::where('id',$req->id)->delete();
        return redirect()->back()->withSuccess('Blog Deleted successfully');
      }

//=====================================Team===============================================================

public function teamForm(){
    return view('admin.add-team');
    }
    public function getTeam(){
        $team = Team::paginate(10);
        return view('admin.team',['team'=>$team]);
    }
    public function postTeam(Request $req){
            $req->validate([
                'name'=>'required',
                'designation'=>'required',
                'image'=>'required',
                'facebook'=>'required',
                "instagram"=>"required",
                "linkdin"=>"required",
            ]);
           $team=new Team;
           $team->name=$req->name;
           $team->designation=$req->designation;
           $images=$req->file('image')->store('team','public');
           $team->image=$images;
           $team->facebook=$req->facebook;
           $team->instagram=$req->instagram;
           $team->linkdin=$req->linkdin;
           $team->save();
           return redirect()->back()->withSuccess('Team Add Data successfully');
        }

        
    public function updateTeam(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                'name'=>'required',
                'designation'=>'required',
                'image'=>'required',
                'facebook'=>'required',
                "instagram"=>"required",
                "linkdin"=>"required",
            ]);
            $images="";
            if($req->hasfile('image')){
                $images=$req->file('image')->store('team','public');
            }
            $team= Team::find($req->id);
            $team->name=$req->name;
            $team->designation=$req->designation;
            $team->image= $images ? $images : $team->image;
            $team->facebook=$req->facebook;
            $team->instagram=$req->instagram;
            $team->linkdin=$req->linkdin;
            $team->save();
            return redirect()->route('get-team')->withSuccess('Team updated Successfully');
        }else{
            $team=Team::find($req->id);
            return view('admin.update-team',['team'=>$team]);
        }
    }

    public function deleteTeam(Request $req){
        Team::where('id',$req->id)->delete();
        return redirect()->back()->withSuccess('Team Deleted successfully');
      }

 //=========================================Testimonial====================================
     
public function testimonialForm(){
    return view('admin.add-testimonial');
    }
    public function getTestimonial(){
        $testimonial = Testimonial::paginate(10);
        return view('admin.testimonial',['testimonial'=>$testimonial]);
    }
    public function postTestimonial(Request $req){
            $req->validate([
                'name'=>'required',
                'designation'=>'required',
                'image'=>'required',
                'description'=>'required',
            ]);
           $testimonial=new Testimonial;
           $testimonial->name=$req->name;
           $testimonial->designation=$req->designation;
           $images=$req->file('image')->store('team','public');
           $testimonial->image=$images;
           $testimonial->description=$req->description;
           $testimonial->save();
           return redirect()->back()->withSuccess('Testimonial Add Data successfully');
        }

        
    public function updateTestimonial(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                'name'=>'required',
                'designation'=>'required',
                'image'=>'required',
                'description'=>'required',
            ]);
            $images="";
            if($req->hasfile('image')){
                $images=$req->file('image')->store('testimonial','public');
            }
            $testimonial= Testimonial::find($req->id);
            $testimonial->name=$req->name;
            $testimonial->designation=$req->designation;
            $testimonial->image= $images ? $images : $team->image;
            $testimonial->description=$req->description;
            $testimonial->save();
            return redirect()->route('get-testimonial')->withSuccess('Testimonial updated Successfully');
        }else{
            $testimonial=Testimonial::find($req->id);
            return view('admin.update-testimonial',['testimonial'=>$testimonial]);
        }
    }

    public function deleteTestimonial(Request $req){
        Testimonial::where('id',$req->id)->delete();
        return redirect()->back()->withSuccess('Testimonial Deleted successfully');
      }
 
// ================================contact=================================================

   public function getContact(){
    $contact = Contact::paginate(10);
    return view('../admin.contact',['contact'=>$contact]);
    }
    public function postContact(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "message"=>"required",
        ]);
        $contact= new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->withSuccess('Contact Created Successfully');
    }
    public function updateContact(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                "name"=>"required",
                "email"=>"required|email",
                 "message"=>"required"
            ]);
            $contact=Contact::find($req->id);
            $contact->name = $req->name;
            $contact->email = $req->email;
            $contact->message = $req->message;
            $contact->Save();
            return redirect()->route('get-contact')->withSuccess('Users Updated successfully');
        }else{
            $contact=Contact::where('id',$req->id)->first();
            return view('admin.update-contact',['contact'=>$contact]);
        }

    }
    public function deleteContact(Request $req){
      Contact::where('id',$req->id)->delete();
      return redirect()->back()->withSuccess('Contact Deleted successfully');
    }
}

