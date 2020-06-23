<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userdataController extends Controller
{
    public function admin()
    {
        if(session()->get('role') != 'admin'){
            return redirect('news_data/login');
        }else{
            return view('admin/admindata');
        }
    }
    public function visitor()
    {
        if(session()->get('role') != 'admin'){
            return redirect('news_data/login');
        }else{
            return view('admin/visitordata');
        }
    }

    public function adduser()
    {
        if(session()->get('role') != 'admin'){
            return redirect('news_data/login');
        }else{
            return view('admin/adduser');
        }
    }

    public function store(Request $request)
    {
        if($request->role == 1){
            DB::table('user')->insert([
                'username' => $request->username,
                'password' => $request->password,
                'role' => 'admin'
            ]);
        }else{
            DB::table('user')->insert([
                'username' => $request->username,
                'password' => $request->password,
                'role' => 'visitor'
            ]);
        }

        return redirect('news_data/adduser');
        //
    }

    public function newuser()
    {
        return view('news/adduser');
    }

    public function addnew(Request $request)
    {
        DB::table('user')->insert([
            'username' => $request->username,
            'password' => $request->password,
            'role' => 'visitor'
        ]);

        return redirect('news/login');
        //
    }
    //
}
