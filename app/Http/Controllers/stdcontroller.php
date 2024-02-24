<?php


namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class stdcontroller extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function register_view(){
        return view('register');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }
    
    public function register(Request $request){
        // print_r($request->all());
        $request->validate([
           'name' => 'required',
           'email' => 'required|email',
           'pass' => 'required',
           'gender' => 'required',
        ]);

        $std_tbl = new StudentModel();
        $std_tbl -> name = $request ['name'];
        $std_tbl -> email = $request ['email'];
        $std_tbl -> password = $request ['pass'];
        $std_tbl -> gender = $request ['gender'];
        $std_tbl ->save();
        return redirect('users');
    }

    public function users(){
        $data = StudentModel::all();
        return view ('users')->with(compact('data'));
    }
    
}
