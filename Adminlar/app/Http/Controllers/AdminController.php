<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\userOld;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('custom.auth');
    // }

    public function admin(){
        $totalUsers = DB::table('user')->count();
        $totalOrder = DB::table('order')->count();
        $users = DB::table('user')->get();
        return view('admin_page',[
            'totalUsers' => $totalUsers,
            'users' => $users,
            'totalOrder' => $totalOrder,
        ]);
    }

    public function admin2(){
        $currentDay = now();
        $formattedDay = $currentDay->format('Y-m-d H:i:s');

        $sold = DB::table('product')->where('sold', '>', '0')->sum('sold');
        $orders = DB::table('order')->get();

        return view('admin_page2', [
            'formattedDay' => $formattedDay,
            'sold' => $sold,
            'orders' => $orders,
        ]);
                // dd($orders); // Dừng và in ra dữ liệu

    }

    public function admin3(){
        $products = DB::table('product')->get();
        $catalogs = DB::table('catalog')->get();
        return view('admin_page3', [
            'products' => $products,
            'catalogs' => $catalogs,
        ]);
    }
}
