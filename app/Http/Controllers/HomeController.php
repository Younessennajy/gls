<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $courses = Course::query()->paginate(5);

        if(Auth::id()){
            $userrole = Auth()->user()->role;
            if($userrole == "user"){
                return view('dashboard')->with('courses', $courses);
            }else if($userrole== "admin"){
                return view("admin.adminhome");
            }else{
                return redirect()->back();
            }
        }
    }
}
