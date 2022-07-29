<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = User::with('role')->get();
        return view('home',compact('data'));
    }

    public function adminView(){
        $data = User::with('role')->get();
        return view('admin.index',compact('data'));
    }

    public function pegawaiView(){
        return view('pegawai.index');
    }
}
