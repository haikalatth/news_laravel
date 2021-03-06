<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class loginController extends Controller
{
    public function index(){
        return view('admin/adminlogin');
    }
    public function auth(Request $req){
        $username = $req->username;
        $pwd   = $req->password;

        $data = DB::table('user')->where(['username'=>$username])->first();
        if($data->username == $username AND $data->password == $pwd){
            if($data->role == 'admin'){
                session(['role' => $data->role]);
                session(['username' => $data->username]);
                return redirect('news_data');
            }else{
                return redirect('news_data/login')->with('failed','Anda tidak memiliki akses');
            }
        }else{
            return redirect('news_data/login')->with('failed','Anda tidak memiliki akses');
        }

    }

    public function logout(){
        session()->flush();
        return redirect('news_data/login');
    }
    //
}
