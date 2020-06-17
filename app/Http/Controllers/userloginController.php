<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userloginController extends Controller
{
    public function index(){
        return view('news/userlogin');
    }
    public function auth(Request $req){
        $username = $req->username;
        $pwd   = $req->password;

        $data = DB::table('user')->where(['username'=>$username])->first();
        if($data->username == $username AND $data->password == $pwd){
            session(['role' => $data->role]);
            session(['username' => $data->username]);
            return redirect('/');
        }else{
            return redirect('news/login')->with('failed','Anda tidak memiliki akses');
        }

    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
    //
}
