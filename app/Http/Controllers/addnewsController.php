<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addnewsController extends Controller
{
    public function index(){
        return view('news/kirimberita');
    }
    public function store(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        DB::table('berita')->insert([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'status' => 'pending',
            'created_at' => date('Y-m-d H:i:s', time())
        ]);
        return redirect('/');
        //
    }
    //
}
