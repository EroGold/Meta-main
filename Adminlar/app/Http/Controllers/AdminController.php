<?php

namespace App\Http\Controllers;
use DB;
use App\Models\userOld;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('custom.auth');
    // }

    public function admin(){
        $totalUsers = DB::table('user')->where('role', '!=', 'admin')->count();
        return view('admin_page', ['totalUsers' => $totalUsers]);
    }

    public function admin2(){
        $currentDay = now();
        $formattedDay = $currentDay->format('Y-m-d H:i:s');

        $sold = DB::table('product')->where('sold', '>', '0')->sum('sold');
        return view('admin_page2', ['formattedDay' => $formattedDay], ['sold' => $sold]);
    }

    public function admin3(){
        $products = DB::table('product')->get();
        return view('admin_page3', ['products' => $products]);
    }
}
