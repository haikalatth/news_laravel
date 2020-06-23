<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    //
}
