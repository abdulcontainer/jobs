<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        $email = $req->email;
        $pass = $req->password;
        if($email == "admin@admin.com" && $pass == "12345"){
            session()->put('admin',$email);
            echo"welcome Admin";
        }else{
            echo"Login Failed";
        }
    }

    function registration(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->mobile = $req->mobile;
        $user->cv_text = $req->cv_text;
        $user->job_title = $req->job_title;
        $user->company= $req->company;
        $user->started_date = $req->started_date;
        $user->industary = $req->industary;
        $user->highest_level = $req->highest_level;
        $user->school = $req->school;
        $user->completed_date = $req->completed_date;
        $user->skill_name = $req->skill_name;
        $user->save();
        return "success";
    }
}