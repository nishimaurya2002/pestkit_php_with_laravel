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

use Hash;
use Session;

class UserController extends Controller
{
    public function signUp(Request $req){
      if($req->isMethod('post')){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required|min:8',
            'c_password'=>'required|min:8|same:password',
        ]);
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->password=Hash::make($req->password);
        $user->role='user';
        $user->save();
        return redirect()->back()->withSuccess('Your Account created Successfully. ');
      }else{
        return view('signup');
      }
    }

    public function login(Request $req){
        if($req->isMethod('post')){
            $req->validate([
                'username'=>'required|email',
                'password'=>'required|min:8',
            ]);
            $user=User::where('email',$req->username)->first();
            if($user){
                if(Hash::check($req->password,$user->password)){
                    $req->session()->put('logined',$user);
                    if($user->role=='admin'|| $user->role== "user"){
                        return redirect()->route('admin');
                    }
                    // else{
                    //     return redirect('/profile');
                    // }
                }else{
                    return redirect()->back()->withFail('Password is wrong');
                }
            }else{
                return redirect()->back()->withFail('Username is not matched');
            }
        }else{
            return view('login');
        }
    }

    public function logout(){
        Session::pull('logined');
         return redirect()->route('login');
        }

        // index

        public function index(){
            $slider=Slider::all();
            $service=service::all();
            $project=Project::all();
            $blog=Blog::all();
            $team=Team::all();
            $testimonial=Testimonial::all();
            return view('index',['slider'=>$slider,'service'=>$service,'project'=>$project,'blog'=>$blog,'team'=>$team,'testimonial'=>$testimonial]);
          
        }
        public function service(){
            $service=service::all();
            // select("*")->limit(2)->get();
            return view('service',['service'=>$service]);
        }
        public function Project(){
            $project=Project::all();
            return view('project',['project'=>$project]);
        }
        public function Blog(){
            $blog=Blog::all();
            return view('blog',['blog'=>$blog]);
        }
        public function Team(){
            $team=Team::all();
            return view('team',['team'=>$team]);
        }
        public function Testimonial(){
            $testimonial=Testimonial::all();
            return view('testimonial',['testimonial'=>$testimonial]);
        }
 }

