<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UserController extends Controller
{
    public function create(){
        $new = "1";
        $url = url('/register');
        $title = "User Registration";
        $data = compact('new','url','title');
        return view("registration")->with($data);
    }

    public function login(Request $request){
        $email = $request['email'];
        $user = Users::find($email);
        if(!is_null($user)){
            $password = md5($request['password']);
            if($password == $user->password ){
                $data = compact('user','email');//compact function make array of a string (key=>valu)
                return view('profile')->with($data);
            }
            else{
                return view('login');
            }
        }
        else{
            return view('login');
        }
        
    }

    public function edit($email){
        $user = Users::find($email);
        if(is_null($user)){
            //if not found
            return redirect('/');
        }
        else{
            $new = "0";
            $title = "Update User";
            $url = url('/register/edit')."/".$email;
            $data = compact('new','user','url','title','email');
            return view('registration')->with($data);
        }
    }


    public function store(Request $request){

        //insert query by laravel model
        $user = new Users;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->state = $request['state'];
        $user->country = $request['country'];
        $user->dob = $request['dob'];
        $user->password = md5($request['password']);
        $user->save();
        //----------

        return redirect('/');
    }


    //update function
    public function update($email,  Request $request){
        $user= Users::find("manish@test.com");

        $user->name= $request['name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->state = $request['state'];
        $user->country = $request['country'];
        $user->dob = $request['dob'];
        $user->save();

        return redirect('/');
    }
}
