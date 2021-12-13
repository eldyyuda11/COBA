<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        $role = Auth::user()->role;

        if($role == "admin"){
            return redirect('/homeadmin');
        } else if($role == "penulis"){
            return redirect()->to('homepenulis');
        }else{
            return redirect()->to('logout');
        }


    }
    public function logout(request $request){
             Auth::logout();
            return redirect('login');
    }
}
