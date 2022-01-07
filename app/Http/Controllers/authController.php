<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

use Auth;
class authController extends Controller
{
    //
    public function regester() {
        return view("regester");
    }
    
    public function postregester(Request $re) {
        $val =$re->validate([

            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',

        ]);
        //dd($val);
       // $user = User::create($val);
        $user = new User();
        $user->name =$re->name;
        $user->email =$re->email;
        $user->password = Hash::make($re->password);
        $user->save();

        return Redirect('/regester');
     }

     public function login() {
        return view("login");
     }

     public function postlogin(Request $re) {
        //return view("login");
        $r =  $re->only("email", "password");

        if(Auth::attempt($r)){
            echo "sucess";
        }else{
            echo "error";
        }
        //dd($r);
        
     }

     public function logout() {
        Auth::logout();
        return redirect("login");

     }
}
